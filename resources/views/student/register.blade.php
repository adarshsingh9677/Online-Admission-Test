<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Register</title>
        <!-- Bootstrap core CSS-->
        <link href="{{asset("admin")}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{asset("admin")}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset("student")}}/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    {{ Form::open(array('url' => 'postRegister')) }}
	<div class="form-area">
	<h3>Registration From Here!</h3>
    <label>Name: </label>
    <input type="text" name="name" placeholder="Enter Name"><br>

    <label>Email: </label>
    <input type="email" name="email" placeholder="Enter Email"><br>


    <label>SSC GPA: </label>
    <input type="number" name="sscGpa" step="any" placeholder="Enter GPA"><br>

    <label>Passing Year: </label>
    <input type="number" name="sscYear" placeholder="SSC"><br>

    <label>HSC GPA: </label>
    <input type="number" name="hscGpa" step="any" placeholder="Enter GPA"><br>

    <label>Passing Year: </label>
    <input type="number" name="hscYear" placeholder="HSC"><br>

    <label>Photo: </label>
    <input type="file" name="photo" placeholder="HSC"><br>
	
    <label></label>
    <input type="submit" value="submit" class="btn-success">
    {{ Form::close() }}
    </div>
	</body>
</html>