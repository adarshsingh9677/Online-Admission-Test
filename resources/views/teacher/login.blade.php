<html>
<head>
    <title>Teacher Login</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/login.css')}}">
</head>
<body>

<div class="main">
    <h3 class="title">Teacher Login</h3>
    <h6 style="text-align: center">{{ session()->get('save') }}</h6>
    {{ Form::open(array('url' => 'teacherLogin')) }}

    <div class="single_div">
        <label>Email : </label>
        <input type="text" name="teacher_email" placeholder="Enter Email">
    </div>

    <div class="single_div">
        <label>Password : </label>
        <input type="password" name="teacher_password" placeholder="Enter Password">
    </div>

    <p><input class="btn btn-default button" type="submit" name="submit" value="Log In"></p>


    {{ Form::close() }}
</div>

</body>
</html>