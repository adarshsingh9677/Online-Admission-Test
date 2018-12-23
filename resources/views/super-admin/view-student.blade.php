@extends('admin-master')
@section('body')
  <div class="container">
    {{ Form::open(array('url' => 'updateStudent')) }}
    <div class="row">
      <div class="col pb-3">
        @foreach($student as $student)
          <div class="personal_info">
            <h4 class="mb-3">Personal Information</h4>
            <p><img class="view_student_photo" src="../storage/app/{{ $student->student_photo_link }}"></p>
            <div class="w-100 mb-3"></div>
            <div class="col-4">

              <label>Name :</label>
            </div>
            <div class="col-8">
              <input type="text" value="{{$student->student_name}}" name="student_name">
            </div>
            <div class="w-100 mb-3"></div>
            <div class="col-4">
              <label>Father Name :</label>
            </div>
            <div class="col-8">
              <input type="text" value="{{$student->student_father_name}}" name="student_father_name">
            </div>
            <div class="w-100 mb-3"></div>
            <div class="col-4">
              <label>Mother Name :</label>
            </div>
            <div class="col-8">
              <input type="text" value="{{$student->student_mother_name}}" name="student_mother_name">
            </div>
          </div>
      </div>
      <div class="col pb-3">
        <div class="academic_info">
          <h4 class="AI">Academic Information</h4>
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
          <input type="hidden" value="{{$student->id}}" name="id">

          @endforeach
        </div>
      </div>
      <div class="w-100"></div>
      <div class="col-3 ml-auto">
        <input class="btn btn-success s_input" type="submit" value="Update" >
      </div>
      <div class="col-3 mr-auto">
        <a class="btn btn-danger s_input" href="{{URL::to('/deleteStudent/'.$student->id)}}">Delete</a>
      </div>
    </div>
    {{ Form::close() }}
  </div>
  @endsection