@extends('layouts.public_layout')
@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option" style="margin-top:4rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="#">{{$training_center->center_name}} </a>
                        <span>{{$service->service_name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Courses Details Section Begin -->
    <section class="course-details spad pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course__details__desc">
                        @if($message = Session::get('message'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{$message}}
                            </div>
                        @endif
                        <img src={{asset("images/$service->service_image")}} alt="">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="course__details__title">
                                    <h3>{{$service->service_name}}</h3>
                                    <div class="price"> {{$service->service_price}} JOD</div>
                                </div>
                            </div>
                        </div>
                        <p class="course__details__text">{{$service->service_desc}}</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-md-3 col-sm-6">
                                <div class="course__details__feature">
                                    <h5>Programs Available</h5>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Complete Course Options
                                                (Classroom + Behind the Wheel Lessons)</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Partial Course Options (Behind
                                                the Wheel Lessons Only)</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Partial Course Options (Classroom
                                                Instruction)</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Additional Practice Hours (Behind
                                                Wheel Lessons)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-md-3 col-sm-6">
                                <div class="course__details__feature">
                                    <h5>Eligibility Requirements</h5>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o"></i> <span>At least 16 years old</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Has had the permit at least 9
                                                months</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Has completed Driver’s ED
                                                Course</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Has accumulated 50 hours of
                                                behind-the-wheel extra practice</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Has received letter of
                                                eligibility from the State</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course__details__sidebar">
                        <div class="course__details__sidebar__location">
                            <div class="course__details__location__map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd"
                                    height="300" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                            <div class="course__details__location__address">
                                <h5>When & Where?</h5>
                                <p><span>Address:</span> {{$training_center->center_location}} <br />{{$training_center->center_name}}</p>
                                <p><span>Time:</span> 1 Hour 3 times a week</p>
                            </div>
                        </div>
                        <div class="course__details__sidebar__register">
                            <h5>Book now</h5>
                            <form action="/service/{{$service->service_id}}/book" method="post">
                                @method('POST')
                                {{csrf_field()}}
                                <p class="text-center">Enter the Strarting Date and Straring Time you would love your lessons to be at
                                    </br><span style="color:#F3BD00">- Time is the same each lesson -</span>
                                </p>
                                <input type="date" name="date" id="date" required>
                                @if($errors->has("date"))
                                    <div class="text-danger">{{$errors->first("date")}}</div>
                                @endif
                                <select name="time">
                                    <option value="08:00:00">08:00 AM</option>
                                    <option value="10:00:00">10:00 AM</option>
                                    <option value="12:00:00">12:00 PM</option>
                                    <option value="02:00:00">02:00 PM</option>
                                    <option value="04:00:00">04:00 PM</option>
                                    <option value="06:00:00">06:00 PM</option>
                                    <option value="08:00:00">08:00 PM</option>
                                </select>
                                <button type="submit" name="book" class="site-btn second-bg">Book Appointment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses Details Section End -->
@endsection
