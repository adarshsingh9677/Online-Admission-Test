@extends('admin-master')
@section('body')
  <div>
    {{ Form::open(array('url' => 'searchStudent')) }}
    <div class="container">
      <h2 class="text-center mb-3">Search Student</h2>
      <div class="row">
        <div class="col-6 mx-auto">
          <div class="parsonal_info">
            <div class="row">
              <div class="col-4">
                <label>Student Class: </label>
              </div>
              <div class="col-8">
                {{--<input class="s_student" type="text" name="student_class" placeholder="Student Class">--}}
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
                <input class="s_student" type="text" name="student_roll" placeholder="Student Roll">
              </div>
              <div class="w-100  mb-3 "></div>
              <div class="col-4"></div>
              <div class="col-8"><input class="btn btn-success" type="submit" value="Search"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
    {{ Form::close() }}
  </div>
  @endsection