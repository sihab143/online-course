@extends('admin.master')

@section('title')
    Manage Teacher
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All User Info</h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <img src="{{$user->image}}" alt="" height="85" width="100"/>
                            </td>
                            <td>
                                <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-primary btn-md">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-danger btn-md" onclick="return confirm('are you sure to delete this..')">
                                    <i class="fa fa-trash"></i>
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
