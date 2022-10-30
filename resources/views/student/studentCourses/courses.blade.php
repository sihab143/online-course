@extends('student.master')

@section('col_md_9')

            @foreach($enrollCourses as $enrollCourse)
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card card-body h-100">
                            <img src="{{$enrollCourse->course->image}}" alt="" height=100% width="100%"/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-body h-100">
                            <h2>Course Title: {{$enrollCourse->course->title}}</h2>
                            <h4>Teacher Name: {{$enrollCourse->course->teacher->name}}</h4>
                            <h5>Course Fee: {{$enrollCourse->course->fee}}</h5>
                            <h5>Starting Date: {{$enrollCourse->course->start_date}}</h5>
                            <h6>Payment Status: {{$enrollCourse->enroll_status}}</h6>

                        </div>
                    </div>
                </div>
            @endforeach



{{--        <div>--}}
{{--            <table class="table table-bordered table-hover">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>#</th>--}}
{{--                    <th>Course Title</th>--}}
{{--                    <th>Fee</th>--}}
{{--                    <th>Course Starting date</th>--}}
{{--                    <th>Course Ending date</th>--}}
{{--                    <th>Course Payment Status</th>--}}
{{--                    <th>Image</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($enrollCourses as $enrollCourse)--}}
{{--                <tr>--}}
{{--                    <td>{{$loop->iteration}}</td>--}}
{{--                    <td>{{$enrollCourse->course->title}}</td>--}}
{{--                    <td>{{$enrollCourse->course->fee}}</td>--}}
{{--                    <td>{{$enrollCourse->course->start_date}}</td>--}}
{{--                    <td>{{$enrollCourse->course->end_date}}</td>--}}
{{--                    <td>{{$enrollCourse->enroll_status}}</td>--}}
{{--                    <td>--}}
{{--                        <img src="{{$enrollCourse->course->image}}" alt="" height="75" width="80"/>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--    </div>--}}
@endsection
