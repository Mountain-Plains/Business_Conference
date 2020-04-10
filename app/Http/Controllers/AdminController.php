<?php
namespace App\Http\Controllers;

use Auth;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function loginCheck(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:6'
        ]);

        $user_data = array(
            'email' => $request -> get('email'),
            'password' => $request -> get('password')
        );

        if (Auth::attempt($user_data))
        {
            return $this->successLogin();
        }
        else
        {
            return back()->withErrors( 'Invalid Login Credentials!');
        }

    }

    function  successLogin()
    {
    return view ('admin.successlogin');
    }


    public function resetpassword(){
        return view('admin.resetpassword');
    }

}
