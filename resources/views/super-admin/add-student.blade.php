@extends('admin-master')
@section('body')
  <div>
    {{ Form::open(array('url' => 'postStudent','enctype'=>"multipart/form-data",'files' => true)) }}

    <div class="container">
      <h2 class="text-center mb-3">Add Students</h2>
      <div class="row">
        <div class="col">
          <div class="parsonal_info">
            <h4 class="mb-3">Personal Information</h4>
            <div class="row">
              <div class="col-4">
                <label>Student Name: </label>
              </div>
              <div class="col-8">
                <input class="s_input" type="text" name="student_name" placeholder="Student Name" >
              </div>
              <div class="w-100 mb-3"></div>
              <div class="col-4">
                <label>Father`s Name: </label>
              </div>
              <div class="col-8">
                <input class="s_input" type="text" name="student_father_name" placeholder="Father Name" >
              </div>
              <div class="w-100  mb-3"></div>
              <div class="col-4">
                <label>Mother`s Name: </label>
              </div>
              <div class="col-8">
                <input class="s_input" type="text" name="student_mother_name" placeholder="Mother Name" >
              </div>
              <div class="w-100 mb-3"></div>
              <div class="col-4">
                <label>Date of Birth: </label>
              </div>
              <div class="col-8">
                <input class="s_input" type="text" name="student_birth_date" placeholder="DD/MM/YY" >
              </div>
              <div class="w-100 mb-3"></div>
              <div class="col-4">
                <label>Religion: </label>
              </div>
              <div class="col-8">
                <select name="student_religion">
                  <option value="None">Select Religion</option>
                  <option value="Islam">Islam</option>
                  <option value="Hinduism">Hinduism</option>
                  <option value="Buddhism">Buddhism</option>
                  <option value="Christianity">Christianity</option>
                  <option value="Other religion">Other religion</option>
                </select>
              </div>
              <div class="w-100 mb-3"></div>
              <div class="col-4">
                <label>Gendar: </label>
              </div>
              <div class="col-8">
                <select class="gender" name="student_gender">
                  <option value="None">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="academic_info">
            <h4 class="mb-3">Academic Infromation</h4>
            <div class="row">

            	<div class="form-group">
                    @include('partials.bs_file', ['name' => 'image', 'label' => 'Image',])
                </div>

              {{--<div class="col-4">--}}
                {{--<label>Student Photo: </label>--}}
              {{--</div>--}}
              {{--<div class="col-8">--}}
                {{--<input class="s_file" type="file" name="student_photo" >--}}
              {{--</div>--}}
              <div class="w-100 mb-3"></div>
              <div class="col-4">
                <label>Student Class: </label>
              </div>
              <div class="col-8">
                {{--<input class="s_input" type="text" name="student_class" placeholder="Student Class" >--}}
                <select class="col-8" name="student_class">
                  <option value="0">Select Classe :</option>
                  @foreach($class as $class)
                    <option value="{{$class->class}}">{{$class->class}}</option>
                  @endforeach
                </select>
              </div>
              <div class="w-100 mb-3"></div>
              <div class="col-4">
                <label>Student Roll: </label>
              </div>
              <div class="col-8">
                <input class="s_input" type="text" name="student_roll" placeholder="Class Roll" >
              </div>
              <div class="w-100 mb-3"></div>
              <div class="col-4">
                <label>Student Email: </label>
              </div>
              <div class="col-8">
                <input class="s_input" type="text" name="student_email" placeholder="Student Email" >
              </div>
              <div class="w-100 mb-3"></div>
              <div class="col-4">
                <label>Student Password: </label>
              </div>
              <div class="col-8">
                <input class="s_input" type="text" name="student_password" placeholder="Student Password" >
              </div>
              <div class="w-100 mb-3"></div>
            </div>
          </div>
        </div>
      </div>
      <p class="text-center mt-3"><input class="btn btn-success s_input btn w-50" type="submit" value="Save Student"></p>
    </div>

    {{ Form::close() }}
  </div>
  @endsection