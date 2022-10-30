@extends('website.master')

@section('title')
    Home
@endsection


@section('content')

    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="heroSlider">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}website/img/slider-1.jpg" alt="" class="w-100 h-550"/>
                <div class="carousel-caption">
                    <h3>Web Development Master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequuntur eaque iste iure placeat? Alias asperiores debitis minima non totam?</p>
                    <hr/>
                    <a href="" class="btn btn-outline-success">Enroll Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/slider-3.png" alt="" class="w-100 h-550"/>
                <div class="carousel-caption">
                    <h3>Android Development Master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequuntur eaque iste iure placeat? Alias asperiores debitis minima non totam?</p>
                    <hr/>
                    <a href="" class="btn btn-outline-success">Enroll Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/slider-4.jpg" alt="" class="w-100 h-550"/>
                <div class="carousel-caption">
                    <h3>Master In Physics</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequuntur eaque iste iure placeat? Alias asperiores debitis minima non totam?</p>
                    <hr/>
                    <a href="" class="btn btn-outline-success">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

    <section class="">
        <div class="container-fluid bg-danger py-2">
            <h1 class="text-white text-center"> All Latest Course</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                @foreach($courses as $course)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="{{asset($course->image)}}" alt=""  height="250"/>
                        <div class="card-body">
                            <h5><a href="{{route('website.course-detail',['id' => $course->id])}}" class="text-decoration-none text-muted">{{$course->title}}</a></h5>
                            <p>{{$course->fee}}</p>
                            <hr/>
                            <a href="{{route('website.course-detail',['id' => $course->id])}}" class="btn btn-outline-success float-end">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="">
        <div class="container-fluid bg-danger py-2">
            <h1 class="text-white text-center"> Our Instructor Info</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                @foreach($teachers as $teacher)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="{{asset($teacher->image)}}" alt="" class="h-250"/>
                        <div class="card-body">
                            <h5>{{$teacher->name}}</h5>
                            <p>{{$teacher->designation}}</p>
                            <hr/>
                            <ul class="nav">
                                <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-facebook-f"></i></a> </li>
                                <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-twitter"></i></a> </li>
                                <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-linkedin-in"></i></a> </li>
                                <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-github"></i></a> </li>
                                <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-google-plus-g"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container-fluid bg-danger py-2">
            <h1 class="text-white text-center"> Student Review</h1>
        </div>
        <div class="container">
            <div class="row mt-4 mb-5">
                <div class="col">
                    <div class="carousel slide" data-bs-ride="carousel" id="customerReview">
                        <ol class="carousel-indicators customer-indicators">
                            <li data-bs-target="#customerReview" data-bs-slide-to="0" class="bg-indicator1 active"></li>
                            <li data-bs-target="#customerReview" data-bs-slide-to="1" class="bg-indicator2"></li>
                            <li data-bs-target="#customerReview" data-bs-slide-to="2" class="bg-indicator3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('/')}}website/img/student2.jpg" alt="" class="member-image"/>
                                <div class="carousel-caption customer-caption ">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,</p>
                                    <h5>- OLIVIA -</h5>
                                    <p>Melbour, Aus</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/')}}website/img/student.jpg" alt="" class="member-image"/>
                                <div class="carousel-caption customer-caption">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,</p>
                                    <h5>- OLIVIA -</h5>
                                    <p>Melbour, Aus</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/')}}website/img/student1.jpg" alt="" class="member-image"/>
                                <div class="carousel-caption customer-caption">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,</p>
                                    <h5>- OLIVIA -</h5>
                                    <p>Melbour, Aus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
