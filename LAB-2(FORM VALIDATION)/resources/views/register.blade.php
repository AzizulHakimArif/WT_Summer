<html>
    <title>Register</title>
<body>
<h1>Registration</h1>
<form action="/register" method="post">
{{csrf_field()}}
Your username is <input type="text" name="username">
@if ($errors->has('username'))
<b>{{$errors->first('username')}}</b>
@endif
<br><br>
Your email is <input type="text" name="email" value="">
@if ($errors->has('email'))
<b>{{$errors->first('email')}}</b>
@endif
<br><br>
Your Date of birth is <input type="date" name="dob" value="">
@if ($errors->has('dob'))
<b>{{$errors->first('dob')}}</b>
@endif
<br><br>
Language Preference
<input type="checkbox" id="lan1" name="lan"> Bangla 
<input type="checkbox" id="lan2" name="lan"> English
@if ($errors->has('lan'))
<b>{{$errors->first('lan')}}</b>
@endif
<br><br>
Your file is <input type="file" name="file" value=" ">
@if ($errors->has('file'))
<b>{{$errors->first('file')}}</b>
@endif
<br><br>

<input type="submit" value="Register"> <br> <br><br>
</form>
</body>
</html>