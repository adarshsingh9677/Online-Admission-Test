@extends('teacher-master')
@section('body')

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>SSC GPA</th>
            <th>Year (SSC)</th>
            <th>HSC GPA</th>
            <th>Year (HSC)</th>
            <th>Mark</th>
        </tr>
        </thead>
        <tbody>
    @foreach($result as $result)
        <tr>
            <td>{{$result->name}}</td>
            <td>{{$result->email}}</td>
            <td>{{$result->ssc_gpa}}</td>
            <td>{{$result->ssc_year}}</td>
            <td>{{$result->hsc_gpa}}</td>
            <td>{{$result->hsc_year}}</td>
            <td>{{$result->mark}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection


