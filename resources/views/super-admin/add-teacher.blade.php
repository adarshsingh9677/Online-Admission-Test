@extends('admin-master')
@section('body')
    <div>
      {{ Form::open(array('url' => 'postTeacher','enctype'=>"multipart/form-data",'files' => true)) }}

      <div class="container">
        <h2 class="text-center mb-3">Add Teacher</h2>
        <div class="row">
          <div class="col">
            <div class="parsonal_info">
              <h4 class="mb-3">Personal Information</h4>
              <div class="row">
                <div class="col-4">
                  <label>Teacher`s Name: </label>
                </div>
                <div class="col-8">
                  <input class="s_input" type="text" name="teacher_name" placeholder="Name" >
                </div>
                <div class="w-100 mb-3"></div>
                <div class="col-4">
                  <label>Father`s Name: </label>
                </div>
                <div class="col-8">
                  <input class="s_input" type="text" name="teacher_father_name" placeholder="Father`s Name" >
                </div>
                <div class="w-100  mb-3"></div>
                <div class="col-4">
                  <label>Mother`s Name: </label>
                </div>
                <div class="col-8">
                  <input class="s_input" type="text" name="teacher_mother_name" placeholder="Mother`s Name" >
                </div>
                <div class="w-100 mb-3"></div>
                <div class="col-4">
                  <label>Date of Birth: </label>
                </div>
                <div class="col-8">
                  <input class="s_input" type="date" name="teacher_birth_date" placeholder="DD/MM/YY" >
                </div>
                <div class="w-100 mb-3"></div>
                <div class="col-4">
                  <label>Religion: </label>
                </div>
                <div class="col-8">
                  <select name="teacher_religion">
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
                  <select class="gender" name="teacher_gender">
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
                <div class="col-4">
                  <label>Teacher`s Photo: </label>
                </div>
                <div class="col-8">
                  <input class="s_file" type="file" name="teacher_photo_link" >
                </div>
                <div class="w-100 mb-3"></div>
                <div class="col-4">
                  <label>University: </label>
                </div>
                <div class="col-8">
                  <input class="s_input" type="text" name="teacher_university" placeholder="University" >
                </div>
                <div class="w-100 mb-3"></div>
                <!-- <div class="col-4">
                  <label>Teacher`s CGPA: </label>
                </div>
                <div class="col-8">
                  <input class="s_input" type="text" name="teacher_cgpa" placeholder="CGPA" >
                </div> -->
                <div class="w-100 mb-3"></div>
                <div class="col-4">
                  <label>Teacher`s Email: </label>
                </div>
                <div class="col-8">
                  <input class="s_input" type="email" name="teacher_email" placeholder="Email" >
                </div>
                <div class="w-100 mb-3"></div>
                <div class="col-4">
                  <label>Teacher`s Password: </label>
                </div>
                <div class="col-8">
                  <input class="s_input" type="text" name="teacher_password" placeholder="Password" ><br>
                </div>
                <div class="w-100 mb-3"></div>
              </div>
            </div>
          </div>
        </div>
        <p class="text-center mt-3"><input class="btn btn-success s_input btn w-50" type="submit" value="Save Teacher"></p>
      </div>
    </div>
  @endsection