@extends('teacher-master')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <div class="">
                    {{ Form::open(array('url' => 'examSubmit')) }}

                    @foreach($teacher as $tt)
                        <input value="{{$tt->id}}" type="hidden" name="teacher_id">
                        <input value="{{$tt->teacher_email}}" type="hidden" name="teacher_email">
                    @endforeach

                    <h3 class="text-info">Questions</h3>
                    <div class="w-100  mb-3"></div>
                    <div class="col-4">
                        <label>Question List </label>
                    </div>
                    <div class="w-100  mb-3"></div>
                    <div class="col-8">
                        <table>
                            <tr class="col-4">
                                <td>
                                    Question no
                                </td>
                                <td  class="velue">
                                    Question
                                </td>
                            </tr>
                                <input type="hidden" value="{{$n=0}}">
                                @foreach($question as $question)
                                <input value="{{$question->question}}" type="hidden" name="question_id">
                                <tr class="velue">
                                    <td>
                                        {{$n=$n+1}}<br>
                                    </td>
                                    <td class="velue">
                                        {{$question->question}}
                                    </td>
                                </tr>

                            @endforeach
                        </table>
                    </div>
                    <div class="w-100  mb-3"></div>
                    <div class="col-8">
                        <input class="btn btn-primary bbbt" type="submit" value="SUBMIT">
                    </div>
                    {{ Form::close() }}
                </div>












            </div>
        </div>
    </div>
    @endsection