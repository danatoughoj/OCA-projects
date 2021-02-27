<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dreams | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href={{asset("public_assets/css/bootstrap.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("public_assets/css/font-awesome.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("public_assets/css/nice-select.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("public_assets/css/magnific-popup.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("public_assets/css/jquery-ui.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("public_assets/css/owl.carousel.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("public_assets/css/slicknav.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("public_assets/css/style.css")}} type="text/css">
</head>

<style>
    .dropProfile:focus,.dropProfile:hover {
        color: black !important;
    }
    .sign {
        transition: 0.2s;
        padding: 10px !important;
        color: #fff !important;
    }
    .sign:hover {
        transform: scale(1.05);
        color: #0c2b4b !important;

    }
    .header__menu {
        padding: 15px 0 ;
    }
    .header__right {
        padding: 0;
    }

    .header__logo {
        padding: 0 ;
        height: 3.9rem;
    }
    .header {
        height: 3.9rem;
    }
    .align {
        display: flex;
        align-items: center;
    }
    .align-right {
      padding-left: 20%;
    }
    .canvas__open {
        top : 13px ;
    }
</style>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__search">
        <i class="fa fa-search search-switch"></i>
    </div>
    <div class="offcanvas__logo">
        <a href="indx"><img src={{asset("public_assets/img/logo.png")}} alt=""></a>
    </div>
    <nav class="offcanvas__menu mobile-menu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/training_centers">Centers</a></li>
            <li><a href="/services">Services</a></li>

            <li class="active"><a href="#">Know More</a>
                <ul class="dropdown">
                    <li><a href="/about">About Us</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    <li><a href="/articles">Articles</a></li>

                </ul>
            </li>
                @if (Auth::check()) 
                            <li class="active">
                                <a href="profile"><i class="fa fa-user-circle fa-2x"></i>{{Auth::user()->user_name}}</a>
                                <ul class="dropdown">
                                    <li class="dropdown-item" ><a class="dropProfile" href="{{url('/profile')}}">Account</a></li>
                                    <li class="dropdown-item">
                                        <a class="dropProfile" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            @if (!(Auth::check())) 
                            <li>
                                <a  href="{{ route('login') }}" class="primary-btn text-center sign py-2">Register|Login</a>
                            </li>                    
                             @endif
                           
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header align header--normal" style="position:fixed; z-index:1000">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo align">
                    <a href="/"><img src={{asset("public_assets/img/logo.png")}} alt=""></a>
                </div>
            </div>
            <div class="col-lg-5 align">
                <nav class="header__menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/training_centers">Centers</a></li>
                        <li><a href="/services">Services</a></li>
                        <li class="active"><a href="#">Know More</a>
                            <ul class="dropdown">
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                                <li><a href="/articles">Articles</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-5 align align-right">
                <div class="header__right">
                    <div class="header__right__search">
                        <i class="fa fa-search search-switch"></i>
                    </div>
                    <div class="header__right__social">
                    <nav class="header__menu p-0">
                        <ul>
                            @if (Auth::check()) 
                            <li class="active">
                                <a href="{{url('profile')}}"><i class="fa fa-user-circle fa-2x"></i>  {{Auth::user()->user_name}}</a>
                                <ul class="dropdown">
                                    <li class="dropdown-item" ><a class="dropProfile" href="{{url('/profile')}}">Account</a></li>
                                    <li class="dropdown-item">
                                        <a class="dropProfile" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            @if (!(Auth::check())) 
                            <li>
                                <a href="{{ route('login') }}" class="primary-btn text-center sign py-2">Register|Login</a>
                            </li>                    
                             @endif
                           
                        </ul>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <span class="fa fa-bars"></span>
        </div>
    </div>
</header>
<!-- Header Section End -->
<div class="mt-5">
@yield('content')
</div>

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="footer__widget">
                    <h5>COMPANY</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Press & Blog</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Faq</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h5>Courses</h5>
                    <ul>
                        <li><a href="#">Winter driving</a></li>
                        <li><a href="#">Program for seniors</a></li>
                        <li><a href="#">Adult in car lesons</a></li>
                        <li><a href="#">Defensive driving</a></li>
                        <li><a href="#">Stick shit lessons</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h5>USEFUL LINKS</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Drupal Themes</a></li>
                        <li><a href="#">WordPress Themes</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#"><img src={{asset("public_assets/img/footer-logo.png")}} alt=""></a>
                    </div>
                    <p>Address : 15 Division Street, New York, NY 12032, United States of America</p>
                    <ul>
                        <li>Phone : +0 (123) 456789</li>
                        <li>Email : Kaseo@gmail.com</li>
                        <li>Fax : +8 (123) 456 789</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by OCA trainees</p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->


<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form action="/services/search" method="POST" class="search-model-form">
            @method('POST')
            {{csrf_field()}}
            <input type="text" name="search_input" id="search-input" placeholder="Search here..">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script>
    // Initialize and add the map
    function initMap() {
    // The location of Uluru
    const uluru = { lat: 31.9408, lng: 35.8845 };
    const Dana = { lat: 31.9488, lng: 35.9281 };
    const Hala = { lat: 31.9576, lng: 35.8671 };
    const Saja = { lat: 31.9476, lng: 35.8300 };
    
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 13,
        center: uluru,
        position: Dana,
        position: Hala,
        position: Saja,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
    const marker2 = new google.maps.Marker({
        position: Dana,
        map: map,
    });
    const marker3 = new google.maps.Marker({
        position: Hala,
        map: map,
    });
    const marker4 = new google.maps.Marker({
        position: Saja,
        map: map,
    })

}
</script>
<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
    var yyyy = today.getFullYear();
    if(dd<10){
    dd='0'+dd
    } 
    if(mm<10){
    mm='0'+mm
    } 
    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("date").setAttribute("min", today);
</script>
<script src={{asset("public_assets/js/jquery-3.3.1.min.js")}}></script>
<script src={{asset("public_assets/js/bootstrap.min.js")}}></script>
<script src={{asset("public_assets/js/jquery.nice-select.min.js")}}></script>
<script src={{asset("public_assets/js/jquery.magnific-popup.min.js")}}></script>
<script src={{asset("public_assets/js/jquery-ui.min.js")}}></script>
<script src={{asset("public_assets/js/jquery.slicknav.js")}}></script>
<script src={{asset("public_assets/js/owl.carousel.min.js")}}></script>
<script src={{asset("public_assets/js/main.js")}}></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK4STg8fZOaPp53nJ8b6O_IM_ha3eR_1E&callback=initMap&libraries=&v=weekly"async></script>
<script src={{asset("admin_assets/js/jquery.nicescroll.js")}}></script>
</body>

</html>
