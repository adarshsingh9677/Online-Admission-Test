<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Good Luck</title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset("admin")}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset("admin")}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset("student")}}/css/exam-style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset("student")}}/script.js"></script>
    <link type="text/css" rel="stylesheet" href="{{asset("student")}}/style.css">
</head>
<body>
<h2 class="massage">Exam Times UP!! {{$time}} hour ago</h2><br>
<a class="btn btn-success massage-btn" href="{{URL::to('/campus')}}">Home</a>
</body>
</html>