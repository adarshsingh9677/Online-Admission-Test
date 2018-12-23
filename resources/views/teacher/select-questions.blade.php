@extends('teacher-master')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <div class="">
                    {{ Form::open(array('url' => 'postExam')) }}

                    <h3 class="text-info">Select Question</h3>
                    <div class="w-100  mb-3"></div>
                    <div class="col-4">
                        <label>Exam Title: </label>
                    </div>
                    <div class="w-100  mb-5"></div>
                    <div class="col-8">
                        <select class="" name="question_id">
                            <option value="0">Select Title</option>
                            @foreach($questions as $questions)
                                <option value="{{$questions->question_id}}">{{$questions->question_title}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="w-100  mb-3"></div>
                    <div class="col-8">
                        <input class="btn btn-primary" type="submit" value="SUBMIT">
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    @endsection