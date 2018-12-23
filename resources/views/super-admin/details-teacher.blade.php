@extends('admin-master')
@section('body')
    <div class="container">
        {{ Form::open(array('url' => 'updateTeacher')) }}
        <div class="row">
            <div class="col pb-3">
                    <div class="personal_info">
                        <h4 class="mb-3">Personal Information</h4>
                        <p class="view_teacher"><img src="..//{{$teacher->teacher_photo_link}}" alt="{{$teacher->teacher_name}}`s Photo"></p>
                        <div class="w-100 mb-3"></div>
                        <div class="col-4">
                            <label>Name :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" value="{{$teacher->teacher_name}}" name="teacher_name">
                        </div>
                        <div class="w-100 mb-3"></div>
                        <div class="col-4">
                            <label>Father Name :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" value="{{$teacher->teacher_father_name}}" name="teacher_father_name">
                            <input type="hidden" value="{{$teacher->teacher_password}}" name="teacher_password">
                        </div>
                        <div class="w-100 mb-3"></div>
                        <div class="col-4">
                            <label>Mother Name :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" value="{{$teacher->teacher_mother_name}}" name="teacher_mother_name">
                        </div>
                    </div>
            </div>
            <div class="col pb-3">
                <div class="academic_info">
                    <h4 class="AI">Academic Information</h4>
                    <label>University :</label>
                    <input type="text" value="{{$teacher->teacher_university}}" name="teacher_university"><br>
                    <label>Email :</label>
                    <input type="email" value="{{$teacher->teacher_email}}" name="teacher_email"><br>
                    <!-- <label>Password :</label>
                    <input type="text" value="{{$teacher->teacher_password}}" name="teacher_password"><br> -->
                    <label>Birth Date :</label>
                    <input type="text" value="{{$teacher->teacher_birth_date}}" name="teacher_birth_date"><br>
                    <label>Gender :</label>
                    <input type="text" value="{{$teacher->teacher_gender}}" name="teacher_gender"><br>
                    <label>Religion :</label>
                    <input type="text" value="{{$teacher->teacher_religion}}" name="teacher_religion"><br>
                    <input type="hidden" value="{{$teacher->id}}" name="id">
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-3 ml-auto">
                <input class="btn btn-success s_input" type="submit" value="Update" >
            </div>
            <div class="col-3 mr-auto">
                <a class="btn btn-danger s_input" href="{{URL::to('/deleteTeacher/'.$teacher->id)}}">Delete</a>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection