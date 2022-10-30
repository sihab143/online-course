@extends('student.master')

@section('col_md_9')
    <div class="card card-body">
        <img src="{{asset($student->image)}}" alt="" height="100" width="100">
    </div>
    <div class="mb-3">
        <div class="card card-body">
            <table class="table table-hover">
                <tr>
                    <th>Id</th>
                    <th>:</th>
                    <td>{{$student->id}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>:</th>
                    <td>{{$student->name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <th>:</th>
                    <td>{{$student->email}}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <th>:</th>
                    <td>{{$student->mobile}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <th>:</th>
                    <td>{{$student->address}}</td>
                </tr>
            </table>
{{--            <h5>Id: {{$student->id}}</h5>--}}
{{--            <h4>Name: {{$student->name}}</h4>--}}
{{--            <h5>Email: {{$student->email}}</h5>--}}
{{--            <h5>Mobile: {{$student->mobile}}</h5>--}}
{{--            <h5>Address: {{$student->address}}</h5>--}}
        </div>
    </div>
@endsection
