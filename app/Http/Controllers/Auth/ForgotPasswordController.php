<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
Use \DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function foo\func;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;;
//use Reminder;
use App\User;
use Carbon\Carbon;

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

       if ($users == null)
       {
           return redirect()->back()->with(['error' => 'Email does not exist']);
       }

        //create a new token to be sent to the user.
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => str_random(60), //change 60 to any length you want
            'created_at' => Carbon::now()
        ]);

        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)->first();

       $users = Sentinel::findById ($users -> id);
       //$reminder = Reminder::exists($users) ? : Reminder::create($users);
       $this->sendEmail($users,$tokenData->token);

       return redirect()->back()->withErrors(['success' => 'Reset code sent to your email']);

    }

    public function sendEmail($user,$token){
        Mail::send(
            'auth.passwords.email',
            ['user' => $user,'token'=>$token],
            function($message) use ($user){
                $message -> to ($user -> email);
                $message -> subject($user->first_name.", reset your password,");
            }
        );
    }

}

