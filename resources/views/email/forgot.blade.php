<h3>Password Reset for {{$user->first_name}}</h3>
<p>
    Please click the password reset button to reset your password
    <a href="{{url('reset_password/'.$user->email)}}">Reset password</a>
</p>
