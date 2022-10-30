@extends('website.master')

@section('title')
    Course Enroll Page
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body h-100">
                        <h3>Course Enroll Form</h3>
                        <hr/>
                        <form action="{{route('enroll.confirm', ['id' => $id])}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    @if(Session::get('student_id'))
                                        <input type="text" name="name" value="{{$data['name']}}" readonly class="form-control">

                                    @else
                                        <input type="text"  name="name" class="form-control">

                                    @endif
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    @if(Session::get('student_id'))
                                        <input type="email" name="email" value="{{$data['email']}}" readonly class="form-control">

                                    @else
                                        <input type="email" name="email" id="enrollEmail" class="form-control">
                                        <span class="text-danger" id="emailError"></span>

                                    @endif
                                    <span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    @if(Session::get('student_id'))
                                        <input type="tel" name="mobile" value="{{$data['mobile']}}" readonly  class="form-control">

                                    @else
                                        <input type="tel" name="mobile" class="form-control">

                                    @endif
                                    <span class="text-danger">{{$errors->has('mobile')?$errors->first('mobile'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Payment Type</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="payment_type" checked class="" value="1"> Pay Now</label>
                                    <label><input type="radio" name="payment_type"  class="" value="2"> Pay Later</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success float-end px-4" value="Confirm Enroll">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
