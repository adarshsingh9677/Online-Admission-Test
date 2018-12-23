@extends('admin-master')
@section('body')
  <div>
    @foreach($teachers as $teachers)
      <div class="container view_teacher">
        <div class="row">
          <div class="col pb-3">
            <img src="{{$teachers->teacher_photo_link}}">
            <p>{{$teachers->teacher_name}}</p>
            <a class="btn btn-success" href="{{URL::to('/teacherDetails/'.$teachers->id)}}">View Details</a>
          </div>
        </div>
      </div>
      @endforeach
  </div>
  @endsection