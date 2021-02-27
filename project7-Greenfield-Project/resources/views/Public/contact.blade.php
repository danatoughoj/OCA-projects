@extends('layouts.public_layout')
@section('content')
    <!-- Map Section Begin -->
    <div class="map" id="map" style="margin-top:8.1rem"></div>
    <!-- Map Section End -->
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Contact Section Begin -->
    <section class="contact spad pt-5">
        <div class="container">
            @if($message = Session::get('message'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{$message}}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact__address">
                        <h4>Contact info</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <p><span>Support@dreams.jo</span><span>+962 786-426-862</span></p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <p>Our Training centers are located in Jordan</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <p><span>Sat - Fri : 8:00am - 10:00pm</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="contact__form">
                        <h4>Leave a message</h4>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                <hr>
                        <form action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email" name="email">
                                </div>
                            </div>
                            <textarea placeholder="Your message" name="message"></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    @endsection
