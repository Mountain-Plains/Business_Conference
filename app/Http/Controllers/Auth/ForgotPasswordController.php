<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
Use \DB;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function forgot()
    {
        $users = DB::table('users')->get();
        return view('admin.forgot',['users' => $users]);
    }

    public  function  password(Request $request)
    {
       $users = User::whereEmail($request -> email)->first();

       if (count($user) == 0)
       {
           return redirect()->back()->with(['error' => 'Email does not exist']);
       }

       $users = Sentinel::findById ($users -> id);
       $reminder = Reminder::exists($users) ? : Reminder::create($users);
       $this->sendEmail($users, $reminder->code);

       return redirect()->back()->with(['success' => 'Reset code sent to your email']);
    }


}

