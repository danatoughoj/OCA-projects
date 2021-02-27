@extends('layouts.public_layout')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg={{asset("public_assets/img/hero-bg.jpg")}}>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero__text">
                        <h5>Best options for you</h5>
                        <h2>drive safe & get license</h2>
                        <a href="/contact" class="primary-btn">Contact us</a>
                        <a href="/services" class="primary-btn second-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Feature Section Begin -->
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Why choose us ?</span>
                            <h2>Our feature</h2>
                        </div>
                        <p>We Provide A great chance for learner drivers and their parents/supervisors a free driving lesson with an accredited professional driving instructor. The lesson lasts for 1 hour and the learner will get training in the best ways to practise their driving. </p>
                        <a href="/services" class="primary-btn second-bg">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature__item">
                                <img src={{asset("public_assets/img/feature/feature-1.png")}} alt="">
                                <h5>Unlimited Car Support</h5>
                            </div>
                            <div class="feature__item">
                                <img src={{asset("public_assets/img/feature/feature-2.png")}} alt="">
                                <h5>Driving School Insures</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature__item right-column">
                                <img src={{asset("public_assets/img/feature/feature-3.png")}} alt="">
                                <h5>Any Time Any Location</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- About Video Section Begin -->
    <section class="about-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="about__video__bg set-bg" data-setbg={{asset("public_assets/img/video-bg.jpg")}}>
                        <a href="https://www.youtube.com/watch?v=bGuHgRQSEuk" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about__video__text">
                        <div class="section-title">
                            <span>Welcome to Online trafic school</span>
                            <h2>looking for lessons?</h2>
                        </div>
                        <p>Driving instruction & Driving classes with Over 30 driving school locations in Jordan Amman. </p>
                        <a href="/about" class="primary-btn second-bg">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Video Section End -->

    <!-- Testimonial Section Begin -->
    <section class="application-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
    <section class="testimonial">
        <div class="container">
            <div class="testimonial__content set-bg" data-setbg={{asset("public_assets/img/testimonial-bg.jpg")}}>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span>Testimonial</span>
                            <h2>Client say</h2>
                        </div>
                        <div class="testimonial__slider owl-carousel">
                            <div class="testimonial__item">
                                <div class="quote-icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>This is the best online driving school i've seen.</p>
                                <h6>Ned Stark</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="quote-icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>Now i can compare and all driving school around the kingdom!</p>
                                <h6>Dovahkiin</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="quote-icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>I've reduced so much time when i was going to driving school.</p>
                                <h6>John Snow </h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

                </div>
            </form>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Pricing Section Begin -->

    <section class="pricing spad set-bg" data-setbg={{asset("public_assets/img/pricing-bg.jpg")}}>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Checkout some of our services </span>
                        {{-- <h2>{{$Service->center_id}}</h2> --}}
                    </div>
                </div>
            </div>

    @if(count($Services) > 0)
    <div class="row">

    @foreach($Services as $Service)
    <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="pricing__item__title">
                        <span>{{$Service->service_type}}</span>
                        <h2>{{$Service->service_price}} JOD</h2>
                        <h5>{{$Service->service_name}}</h5>
                    </div>
                    <ul>
                        <li style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    line-height: 25px;    
                                    max-height: 100px;     
                                    -webkit-line-clamp: 6;
                                    -webkit-box-orient: vertical;">
                            {{$Service->service_desc}}
                        </li>
                    </ul>
                    <a href="/service/{{$Service->service_id}}" class="primary-btn second-bg">Book Now</a>
                </div>
            </div>

    @endforeach
</div>

    @else
    <p>no posts found</p>
    @endif
        </div>
    </section>
    <!-- Pricing Section End -->


    @endsection
