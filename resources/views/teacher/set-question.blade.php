@extends('teacher-master')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                {{ Form::open(array('url' => 'postQuestion','enctype'=>"multipart/form-data",'files' => true)) }}
                <h3>Set Question</h3>
                <div class="col-4">
                    <label>Subject Name: </label>
                </div>
                <div class="col-8">
                    <select class="subject_id" name="subject_id">
                        <option value="2">English</option>
                        <option value="7">Math</option>
                        <option value="8">Science</option>
                    </select>
                </div>
                <!-- <div class="col-4">
                    <label>Number of Questions: </label>
                </div>
                <div class="col-8">
                    <input type="number" name="number_of_question" placeholder="Total Questions">
                </div> -->
                <input class="btn btn-success" type="submit" value="SUBMIT">
                {{ Form::close() }}
            </div>
        </div>
    </div>
    @endsection