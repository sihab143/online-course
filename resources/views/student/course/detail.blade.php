@extends('website.master')

@section('title')
    Course Registration Detail
@endsection

@section('content')

    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Course Title</th>
                                <td>{{$result['title']}}</td>
                            </tr>
                            <tr>
                                <th>Instructor Name</th>
                                <td>{{$result['teacher_name']}}</td>
                            </tr>
                            <tr>
                                <th>Starting Date</th>
                                <td>{{$result['start_date']}}</td>
                            </tr>
                            <tr>
                                <th>Course Fee</th>
                                <td>{{$result['fee']}}</td>
                            </tr>
                            <tr>
                                <th>Registration Status</th>
                                <td>{{$result['enroll_status']}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
