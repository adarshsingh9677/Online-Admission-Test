@extends('teacher-master')
@section('body')
    {{ Form::open(array('url' => 'postSubmitQuestion', 'class'=> 'input_que','enctype'=>"multipart/form-data",'files' => true)) }}
    <input type="hidden" name="subject_id" value="{{$subject_id}}">
    <input type="hidden" name="number_of_question" value="{{$q_no}}">
    @for ($i = 1; $i <= $q_no; $i++)
        <label>Question: {{$i}} </label><br>
        <input class="question" type="text" name="question{{$i}}"placeholder="Question"><br>
        <div class="choice">
            <input class="" placeholder="A: Choice 1" type="text" name="choice_1{{$i}}">
            <input class="" placeholder="B: Choice 2" type="text" name="choice_2{{$i}}">
            <input class="" placeholder="C: Choice 3" type="text" name="choice_3{{$i}}">
            <input class="" placeholder="D: Choice 4" type="text" name="choice_4{{$i}}">
            {{--<input class="" placeholder="Right Ans" type="text" name="right_ans{{$i}}">--}}
            <select class="right_ans" name="right_ans{{$i}}">
                <option value="0">Select Ans :</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
            <select class="right_ans" name="level{{$i}}">
                <option value="0">Select Level :</option>
                <option value="1">Easy</option>
                <option value="2">Medium</option>
                <option value="3">Hard</option>
            </select><br>
        </div>
    @endfor
    <input class="btn btn-primary submit_question" type="submit" value="Submit" name="Submit">
    {{ Form::close() }}
    @endsection