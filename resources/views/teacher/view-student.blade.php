@extends('teacher-master')
@section('body')
<div class="container">
<div class="row">
    {{ Form::open(array('url' => 'updateStudent')) }}
    @foreach($student as $student)

    <div class="col-md-6">

        <div class="personal_info">
            <h3 class="PI">Personal Information</h3>
            <p><img src="../storage/app/{{ $student->student_photo_link }}"></p><br>
            <label>Name :</label>
            <input type="text" value="{{$student->student_name}}" name="student_name"><br>
            <label>Father Name :</label>
            <input type="text" value="{{$student->student_father_name}}" name="student_father_name"><br>
            <label>Mother Name :</label>
            <input type="text" value="{{$student->student_mother_name}}" name="student_mother_name"><br>
        </div>
    </div>
    <div class="col-md-6">
        <div class="academic_info">
            <h3 class="AI">Academic Information</h3>
            <label>Class :</label>
            <input type="text" value="{{$student->student_class}}" name="student_class"><br>
            <label>Roll :</label>
            <input type="text" value="{{$student->student_roll}}" name="student_roll"><br>
            <label>Email :</label>
            <input type="text" value="{{$student->student_email}}" name="student_email"><br>
            <label>Password :</label>
            <input type="text" value="{{$student->student_password}}" name="student_password"><br>
            <label>Birth Date :</label>
            <input type="text" value="{{$student->student_birth_date}}" name="student_birth_date"><br>
            <label>Gender :</label>
            <input type="text" value="{{$student->student_gender}}" name="student_gender"><br>
            <label>Religion :</label>
            <input type="text" value="{{$student->student_religion}}" name="student_religion"><br>
            @endforeach
            <label>Mark :</label>
            @foreach($mark as $mark)
                <input  class="mark_margin" type="text" value="{{$mark->mark}}" name="student_religion"><br>
            @endforeach
        </div>
    </div>
</div>
</div>
        {{ Form::close() }}
    @endsection