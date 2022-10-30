@extends('teacher.master')

@section('title')
    Manage Course
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Course Detail Info</h4>
                    @if($message = Session::get('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <tr>
                            <th>Course Id</th>
                            <td>{{$course->id}}</td>
                        </tr>
                        <tr>
                            <th>Course Title</th>
                            <td>{{$course->title}}</td>
                        </tr>
                        <tr>
                            <th>Course Start Date</th>
                            <td>{{$course->start_date}}</td>
                        </tr>
                        <tr>
                            <th>Course End Date</th>
                            <td>{{$course->end_date}}</td>
                        </tr>
                        <tr>
                            <th>Course Fee</th>
                            <td>{{$course->fee}}</td>
                        </tr>
                        <tr>
                            <th>Course Short Description</th>
                            <td>{{$course->short_description}}</td>
                        </tr>
                        <tr>
                            <th>Course Long Description</th>
                            <td>{!! $course->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Course Image</th>
                            <td>
                                <img src="{{asset($course->image)}}" alt="" height="" width=""/>
                            </td>
                        </tr>
                        <tr>
                            <th>Course Publication Status</th>
                            <td>{{$course->status == 0 ? 'Course is Unpublished' : 'Course is Published'}}</td>
                        </tr>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
