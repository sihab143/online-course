<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/review.css"/>
    <title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand ">SSMS</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link ">Home</a> </li>
            <li><a href="{{route('about')}}" class="nav-link ">About Us</a> </li>
            <li><a href="{{route('course')}}" class="nav-link">All Course</a> </li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a> </li>
            <li><a href="{{route('test.index')}}" class="nav-link">Test</a> </li>
            @if(Session::get('student_id'))
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Session::get('student_name')}}</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('student.dashboard')}}" class="dropdown-item">Dashboard</a> </li>
                        <li><a href="{{route('student.logout')}}" class="dropdown-item">Logout</a> </li>
                    </ul>
                </li>
            @else
                <li><a href="{{route('login-registration')}}" class="nav-link">Login / Registration</a> </li>
            @endif
        </ul>
    </div>
</nav>

@yield('content')


<footer>
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h4 class="text-center">Why Choice Us</h4>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut consectetur ex, hic ipsam minima nam nihil odio praesentium quod reiciendis repellat reprehenderit voluptates. Alias ducimus fuga laborum reprehenderit vitae!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h4 class="text-center">Popular Courses</h4>
                        <hr/>
                        <ul class="list-group navbar-nav">
                            <li><a href="" class="list-group-item">Web Development</a> </li>
                            <li><a href="" class="list-group-item">Android Development</a> </li>
                            <li><a href="" class="list-group-item">Master in CSE</a> </li>
                            <li><a href="" class="list-group-item">PHP With Laravel</a> </li>
                            <li><a href="" class="list-group-item">Master in ICT</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h4 class="text-center">Contact With Us</h4>
                        <hr/>
                        <p>
                            House #420, Road # 120, West Dhanmondi,<br/>
                            Dhaka - 1209 <br/>
                            Email: sohanur.sr63@gmail.com<br/>
                            Phone: 01742-582121
                        </p>
                        <hr/>
                        <ul class="nav">
                            <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-2x fa-facebook-f"></i></a> </li>
                            <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-2x fa-twitter"></i></a> </li>
                            <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-2x fa-linkedin-in"></i></a> </li>
                            <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-2x fa-github"></i></a> </li>
                            <li><a href="" class="nav-link text-dark"><i class="fa-brands fa-2x fa-google-plus-g"></i></a> </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-white mb-0">Design & Developed By Web Development &copy; Md. Sihab Uddin </p>
                </div>
            </div>
        </div>
    </section>

</footer>


<script src="{{asset('/')}}website/js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.js"></script>
<script src="{{asset('/')}}website/js/owl.carousel.js"></script>

<script>
    $(document).on('blur', '#enrollEmail', function(){
        var email = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{url('/check-student-email')}}",
            data: {email: email},
            dataType: "JSON",
            success: function (response) {
                // $('#emailError').append(response.message);
                $('#emailError').text(response.message);
                // console.log(response);

            }
        })
    });
</script>

</body>
</html>
