<h3>Password Reset for {{$user->first_name}}</h3>
<p>
    Please click the link to reset your password
    <a href="{{$link = url('passwords/reset/'.$token.'?email='.$user->email)}}">Reset password</a>
</p>
