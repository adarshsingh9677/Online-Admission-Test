<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Eaxm Started</title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset("admin")}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset("admin")}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset("student")}}/css/exam-style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{asset("student")}}/script.js"></script>
        <link type="text/css" rel="stylesheet" href="{{asset("student")}}/style.css">
</head>
<body>

<div class="clock-custom clock fixed-top">
    <span id="hr">00</span>
    <span> : </span>
    <span id="min">00</span>
    <span> : </span>
    <span id="sec">00</span>
</div>


{{ Form::open(array('url' => 'postAns')) }}
@foreach($check as $check)
<input type="hidden" name="email" value="{{$check->email}}">
@endforeach


<h2 class="fixed-top exam_head">Select The Right ans from Bellow!!</h2>
<input type="hidden" {{$i=1}} >
<div class="questions">
    @foreach($questions as $questions)
    <div class="all">
        <label class="question">{{$i}} : {{$questions->question}}</label><br>
            <input class="item" type="radio" name="ans{{$i}}" value="A"> {{$questions->choice_1}}
            <input class="item" type="radio" name="ans{{$i}}" value="B"> {{$questions->choice_2}}
            <input class="item" type="radio" name="ans{{$i}}" value="C"> {{$questions->choice_3}}
            <input class="item" type="radio" name="ans{{$i}}" value="D"> {{$questions->choice_4}} <br>
    </div>
    <input type="hidden"  {{$i++}} >

    @endforeach
</div>

    <input class="exam-btn" type="submit" value="SUBMIT">
{{ Form::close() }}
</body>
</html>