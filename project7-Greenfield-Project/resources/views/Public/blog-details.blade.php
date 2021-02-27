@extends('layouts.public_layout')
@section('content')

    <!-- Blog Hero Section Begin -->
    <section class="blog-hero set-bg" data-setbg={{asset("public_assets/img/blog/details/blog-hero.jpg")}}>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__hero__text">
                        <span>Driving tips</span>
                        <h2>Critical tips for safe winter driving, according to experts</h2>
                        <ul>
                            <li>Nov 18, 2019</li>
                            <li>03 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero Section End -->

    <!-- Blog Details Section Begin -->
    <div class="blog-details">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            <p>According to the US Department of Transportation, more than 1,300 people are killed and
                                over 116,800 are injured each year by auto accidents that occur on snowy, icy, or slushy
                                roads.</p>
                            <p>Safe winter driving requires an abundance of caution, with defensive driving techniques
                                employed and extra vigilance behind the wheel. Common sense practices — like never using
                                a phone while driving and always wearing a seatbelt — are all the more important, while
                                speeding and aggressive driving are especially</p>
                        </div>
                        <div class="blog__details__quote">
                            <i class="fa fa-quote-right"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis.</p>
                            <span>Dr Tony Bartone said</span>
                        </div>
                        <div class="blog__details__desc">
                            <p>"Calibrate yourself every time you start a drive through bad weather by testing the
                                conditions as you leave the relative safety of your neighborhood or the parking lot,"
                                Rogers said. "When traffic is clear and you have room to work, try slowing or stopping
                                as quickly as you can without activating your antilock brakes, for example."</p>
                            <p>Being an alert, defensive driver while on the road is critical for winter driving safety,
                                but so too are the ways in which you prepare and care for your vehicle during the colder
                                months. Depending on where you live and the types of roads on which you drive, winter
                                driving may call for everything from different tires to different wiper blades to
                                different fluids in the engine.</p>
                            <p>During the winter, it's also a good idea to stock your car with a few specialty items
                                that can help get you on the road faster first thing or get you out of a jam if you get
                                stuck along the way.</p>
                        </div>
                        <div class="blog__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Tag: Travel, Healthy, Insurance, Police</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog__details__widget__social">
                                        <span>Share:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="#" class="blog__option__btn__prev">
                                        <h6 class="option__btn__name"><i class="fa fa-angle-left"></i> Previous posts
                                        </h6>
                                        <div class="blog__option__btn__item">
                                            <div class="blog__option__btn__pic">
                                                <img src={{asset("public_assets/img/blog/details/prev.jpg")}} alt="">
                                            </div>
                                            <div class="blog__option__btn__text">
                                                <h6>Looking for Music & Sounds for my new Android...</h6>
                                                <ul>
                                                    <li>Nov 18, 2019</li>
                                                    <li>03 Comment</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="#" class="blog__option__btn__next">
                                        <h6 class="option__btn__name">Next posts <i class="fa fa-angle-right"></i></h6>
                                        <div class="blog__option__btn__item">
                                            <div class="blog__option__btn__pic">
                                                <img src={{asset("public_assets/img/blog/details/next.jpg")}} alt="">
                                            </div>
                                            <div class="blog__option__btn__text">
                                                <h6>Looking for Music & Sounds for my new Android...</h6>
                                                <ul>
                                                    <li>Nov 18, 2019</li>
                                                    <li>03 Comment</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->

    <!-- Recent Blog Section Begin -->
    <section class="recent-blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title center-title">
                        <h2>Recent posts</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src={{asset("public_assets/img/blog/details/rb-1.jpg")}} alt="">
                                </div>
                                <div class="blog__item__text">
                                    <span>Driving tips</span>
                                    <h5><a href="#">Driving instructor caught without driver's license</a></h5>
                                    <ul>
                                        <li>Nov 18, 2019</li>
                                        <li>03 Comment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src={{asset("public_assets/img/blog/details/rb-2.jpg")}} alt="">
                                </div>
                                <div class="blog__item__text">
                                    <span>Driving tips</span>
                                    <h5><a href="#">Driving instructor caught without driver's license</a></h5>
                                    <ul>
                                        <li>Nov 18, 2019</li>
                                        <li>03 Comment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src={{asset("public_assets/img/blog/details/rb-3.jpg")}} alt="">
                                </div>
                                <div class="blog__item__text">
                                    <span>Driving tips</span>
                                    <h5><a href="#">Driving instructor caught without driver's license</a></h5>
                                    <ul>
                                        <li>Nov 18, 2019</li>
                                        <li>03 Comment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recent Blog Section End -->

    @endsection
