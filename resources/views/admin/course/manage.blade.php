@extends('admin.master')

@section('title')
    Manage Course
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Course Info</h4>
                    @if($message = Session::get('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Fee</th>
                            <th>Instructor Info</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($courses as $course)
                            <tr class="{{$course->status == 0?'bg-warning': 'bg-success'}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->start_date}}</td>
                                <td>{{$course->end_date}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->teacher->name}}</td>
                                <td>{{$course->status == 1 ? 'Publish' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('admin.course-detail', ['id' => $course->id])}}" class="btn btn-primary btn-md">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('admin.course-status', ['id' => $course->id])}}" class="btn btn-success btn-md">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
