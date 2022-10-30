@extends('admin.master')

@section('title')
    Manage Student
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Student Info</h4>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->address}}</td>
                                <td>{{$student->mobile}}</td>
                                <td>
                                    <img src="{{asset($student->image)}}" alt="" height="60" width="75"/>
                                </td>
                                <td>{{$student->status == 1 ? 'Active' : 'inactive'}}</td>
                                <td>

                                    <a href="{{route('admin.student-update-status', ['id' => $student->id])}}" class="btn {{$student->status == 1 ? 'btn-success' : 'btn-danger'}} btn-md" onclick="return confirm('Are you sure to change status..')">
                                        <i class="fa {{$student->status == 1 ? 'fa-arrow-up' : 'fa-arrow-down'}}"></i>
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
