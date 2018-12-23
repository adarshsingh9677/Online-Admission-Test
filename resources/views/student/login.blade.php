<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Exam</title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset("admin")}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset("admin")}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset("student")}}/css/exam-style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="token">
        {{ Form::open(array('url' => 'postLogin')) }}
        <div class="login_token">
        <h2>Enter The Token</h2>
        <label class="token_name">Tocken: </label>
        <input type="text" name="tocken" placeholder="Enter Tocken"><br>
        </div>
        <input class="bbt" type="submit" value="Enter">
        {{ Form::close() }}
    </div>

</body>
</html>