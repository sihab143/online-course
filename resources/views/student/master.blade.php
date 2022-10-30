@extends('website.master')

@section('title')
    {{Session::get('student_name')}} Dashboard
@endsection


@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-3">
                    <div class="card card-body bg-primary">
                        <h1 class="text-light">My Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body bg-success h-100">
                        <div class="list-group">
                            <a href="{{route('student.dashboard')}}" class="list-group-item {{Request::path() == "student-dashboard" ? "active" : ""}}">My Profile</a>
                            <a href="{{route('student.courses')}}" class="list-group-item {{Request::path() == 'student-courses' ? 'active' : ''}}">Course</a>
                            <a href="" class="list-group-item">Study</a>
                            <a href="" class="list-group-item">Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 bg-info pt-4">

                    @yield('col_md_9')

                </div>
            </div>
        </div>
    </section>

@endsection
