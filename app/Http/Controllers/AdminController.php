<?php

namespace App\Http\Controllers;

use App\Template;
use Auth;
use App\user;
use App\Admin;
use http\Exception\BadQueryStringException;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function loginCheck(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:6'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return $this->successLogin();
        } else {
            return redirect()->back()->withErrors('Invalid Login Credentials!');
        }

    }

    function successLogin()
    {
        return view('admin.dashboard');
    }

    function getProfile()
    {
        $data['data'] = DB::table('users')->get();

        return view('admin.Profile.Users', $data);
    }

    public function addUser()
    {
        return view('admin.Profile.addNewUser');
    }
    public function createUser(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'headerColor' => 'required',
                'headerTextColor' => 'required',
                'backColor' => 'required',
                'primaryTextColor' => 'required',
            ]);

            $template = new Template;

            $template->name = $request['name'];
            $template->headerColor = $request['headerColor'];
            $template->headerTextColor = $request['headerTextColor'];
            $template->backColor = $request['backColor'];
            $template->primaryTextColor = $request['primaryTextColor'];

            $template->save();
            return redirect()->action('TemplateController@index')->withErrors('Template Saved Successfully');
        } catch (BadQueryStringException $exception) {
            return redirect()->withErrors($exception);
        }
    }


    public function updateProfile($id)
    {
        $user = User::find($id);
        return view('admin.Profile.updateProfile', compact('user', 'id'));
//        return view('admin.Profile.updateProfile')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'email' => 'required',
                'first_name'=>'required',
                'last_name'=>'required'
            ]);

            $user = User::find($id);
            $user->fill($validated);

            $user->save();

            return redirect()->action('AdminController@getProfile')->with('message','User Updated Successfully');
        } catch (BadQueryStringException $exception) {
            return back()->withErrors($exception);
        }
    }

    public function deleteProfile($id)
    {
        $user = User::get();
        if (count($user) <= 1) {
            return redirect()->action('AdminController@getProfile')->withErrors('Cannot delete! Atleast one template is required in database.');
        }
        $user = User::find($id);
        $user->delete();

        $error_msg = "\"" . $user->name . "\" template deleted successfully.";

        return redirect()->action('AdminController@getProfile')->withErrors($error_msg);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
