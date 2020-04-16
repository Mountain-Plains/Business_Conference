<?php

namespace App\Http\Controllers;

use App\Template;
use Auth;
use App\user;
use App\Admin;
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

    public function logincheck(Request $request)
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
            return $this->successlogin();
        } else {
            return back()->withErrors('Invalid Login Credentials!');
        }

    }

    function successlogin()
    {
        return view('admin.successlogin');
    }

    function getProfile()
    {
        $data['data'] = DB::table('users')->get();

        return view('admin.Profile.Users', $data);
    }

    public function updateProfile($id)
    {
        $user = User::find($id);
        return view('admin.Profile.updateProfile', compact('user', 'id'));
//        return view('admin.Profile.updateProfile')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'first_name' => 'required|first_name',
            'last_name' => 'required|last_name',
        ]);


        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name=$request->input('last_name');
        $user->email=$request->input('email');

        $user->save();
        return redirect()->action('AdminController@getProfile')->with('message','Updated User Successfully!');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
