@extends('layouts.public_layout')
@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option breadcrumb--about" style="padding-top:6rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Hero Section Begin -->
    <section class="about-hero spad set-bg" data-setbg="public_assets/img/about/about-hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-5 m-auto text-center">
                    <div class="about__hero__text">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>Go Drive</h2>
                        </div>
                        <p>Is a website that offers online booking service,
                         our main goal is make the booking drive lessons process much
                          easier for the people, which will effect on the community
                           by reducing the regular time when the people used to go to
                            driving school and check the available dates, people can book
                             driving lessons for many vehicles such as scooters, motorcycles,
                              manual cars, automatic cars, trucks etc.</p>
                        <a href="https://www.youtube.com/watch?v=qkFQXNo_dbs" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Hero Section End -->

        <!-- Feature Section Begin -->
    <section class="feature feature--about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Why choose us ?</span>
                        <h2>Our feature</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="feature__item">
                        <img src="public_assets/img/feature/fa-1.png" alt="">
                        <h5>Unlimited Car Support</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="feature__item">
                        <img src="public_assets/img/feature/fa-2.png" alt="">
                        <h5>Driving School Insures</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="feature__item">
                        <img src="public_assets/img/feature/fa-3.png" alt="">
                        <h5>Any Time Any Location</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->
    
    <!-- Team Section Begin -->
    <section class="team spad pt-3">
        <div class="container text-center">
        
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="section-title">
                        <span>Our Great Team</span>
                        <h2>Our Developers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($array as $key => $value)
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img" style="width:100px; height:100px;">
                            <img src="{{$value['image']}}" alt="{{$value['name']}}">
                        </div>
                        <div class="team__item__text">
                            <h5>{{$value['name']}}</h5>
                            <span>{{$value['job']}}</span>
                            <p>{{$value['about']}}</p>
                            <div class="team__item__social">
                                <a href="{{$value['facebook']}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$value['github']}}"><i class="fa fa-github"></i></a>
                                <a href="{{$value['linkedin']}}"><i class="fa fa-linkedin-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    @endsection
