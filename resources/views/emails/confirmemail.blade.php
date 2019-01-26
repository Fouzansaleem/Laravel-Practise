<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>Test Email</h1>

<h2>Welcome to my site {{$user['name']}}</h2>
<br/>

Your registered email is {{$user->email}} <br><br>    Verify your email


<a class="btn btn-success" href="{{ route('verify',$user->verification_token) }}"> Verify Email</a> <br>



</body>
</html>