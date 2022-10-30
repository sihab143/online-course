@extends('website.master')

@section('title')
    Contact
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Contact with Us</h3>
                        <hr/>
                        <p>
                            House #420, Road # 120, West Dhanmondi,<br/>
                            Dhaka - 1209 <br/>
                            Email: sohanur.sr63@gmail.com<br/>
                            Phone: 01742-582121 <br/>
                            tel-phone: +88102453 <br/>
                            Support Email: info@support.com <br/>
                            Fax: 0231454
                        </p>
                        <hr/>
                        <ul class="nav">
                            <li><a href="" class="nav-link text-danger"><i class="fa-brands fa-2x fa-facebook-f"></i></a> </li>
                            <li><a href="" class="nav-link text-danger"><i class="fa-brands fa-2x fa-twitter"></i></a> </li>
                            <li><a href="" class="nav-link text-danger"><i class="fa-brands fa-2x fa-linkedin-in"></i></a> </li>
                            <li><a href="" class="nav-link text-danger"><i class="fa-brands fa-2x fa-github"></i></a> </li>
                            <li><a href="" class="nav-link text-danger"><i class="fa-brands fa-2x fa-google-plus-g"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Give us Your Message</h3>
                        <hr/>
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Your Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Email</label>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Mobile</label>
                                <div class="col-md-9">
                                    <input type="tel" name="mobile" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Message</label>
                                <div class="col-md-9">
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-4 float-end" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14607.609767991682!2d90.3932688!3d23.7508581!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1655266491068!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
