@extends('teacher-master')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <div class="">
                    {{ Form::open(array('url' => 'teacherSearchStudent')) }}
                    @foreach($teacher as $tt)
                        <input value="{{$tt->id}}" type="hidden" name="teacher_id">
                        <input value="{{$tt->teacher_email}}" type="hidden" name="teacher_email">
                        @endforeach
                    <h3 class="text-info">Search Student</h3>
                    <div class="w-100  mb-3"></div>
                    <div class="col-4">
                        <label>Student Class: </label>
                    </div>
                    <div class="col-8">
                        {{--<input class="s_student_class" type="text" name="student_class" placeholder="Student Class">--}}
                        <select class="col-8" name="student_class">
                            <option value="0">Select Classe :</option>
                            @foreach($class as $class)
                                <option value="{{$class->class}}">{{$class->class}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-100  mb-3"></div>
                    <div class="col-4">
                        <label>Student Roll: </label>
                    </div>
                    <div class="col-8">
                        <input class="s_student_roll" type="text" name="student_roll" placeholder="Student Roll">
                    </div>
                    <input class="btn btn-primary b_student" type="submit" value="Search">
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    @endsection