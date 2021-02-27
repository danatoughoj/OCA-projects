<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href={{asset("admin_assets/css/bootstrap.css")}} rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href={{asset("admin_assets/css/style.css")}} rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src={{asset("admin_assets/js/jquery-2.1.1.min.js")}}></script>
    <!--icons-css-->
    <link href={{asset("admin_assets/css/font-awesome.css")}} rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
    <script src={{asset("admin_assets/js/Chart.min.js")}}></script>
    <!--//charts-->
    <!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
    <!-- Chartinator  -->
    <script src={{asset("admin_assets/js/chartinator.js")}} ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],

                colIndexes: [2],

                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],

                ignoreCol: [2],

                chartType: 'GeoChart',

                chartAspectRatio: 1.5,

                chartZoom: 1.75,

                chartOffset: [-12,0],

                chartOptions: {

                    width: null,

                    backgroundColor: '#fff',

                    datalessRegionColor: '#F5F5F5',

                    region: 'world',

                    resolution: 'countries',

                    legend: 'none',

                    colorAxis: {

                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {

                        trigger: 'focus',

                        isHtml: true
                    }
                }


            });
        });
    </script>
    <!--geo chart-->

    <!--skycons-icons-->
    <script src={{asset("admin_assets/js/skycons.js")}}></script>
    <!--//skycons-icons-->
</head>
<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            <div class="header-main">
                <div class="header-left">
                    <div class="logo-name">
                        <a href="{{url('/')}}"> <h1><span style="color: #0c2b4a">D</span>reams</h1>
                            <!--<img id="logo" src="" alt="Logo"/>-->
                        </a>
                    </div>
                </div>
                <div class="header-right">
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img"><img src={{asset("admin_assets/images/p1.png")}} alt=""> </span>
                                        <div class="user-name">
                                            <p>Malorum</p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class="fa fa-angle-down lnr"></i>
                                        <i class="fa fa-angle-up lnr"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            logout
                                        </a>

                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
{{--                                    <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>--}}
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--heder end here-->
            <!-- script-for sticky-nav -->
            <script>
                $(document).ready(function() {
                    var navoffeset=$(".header-main").offset().top;
                    $(window).scroll(function(){
                        var scrollpos=$(window).scrollTop();
                        if(scrollpos >=navoffeset){
                            $(".header-main").addClass("fixed");
                        }else{
                            $(".header-main").removeClass("fixed");
                        }
                    });

                });
            </script>
            <!-- /script-for sticky-nav -->

            <!--inner block start here-->
            <div class="inner-block" style="height: 100vh">
                @yield('content')
            </div>

            <!--inner block end here-->

{{--            <!--copy rights start here-->--}}
                 @yield('footer')
{{--            <!--COPY rights end here-->--}}
        </div>
    </div>
    <!--slider menu-->
    <div class="sidebar-menu">
        <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
                <!--<img id="logo" src="" alt="Logo"/>-->
            </a> </div>
        <div class="menu">
            <ul id="menu" >

                <div class="{{request()->getRequestUri() == '/admin' ? 'active': ''}}">
                <li id="menu-home" ><a href="{{url('/admin')}}"><i class="fa fa-tachometer"
                        ></i><span>Dashboard</span></a>
                </li>
                </div>

                <div class="{{(request()->getRequestUri() == '/admin/manageAdmin' || request()->getRequestUri() == '/admin/viewAdmin') ? 'active': ''}}">
                <li><a><i class="fa fa-cogs"></i><span>Manage admins</span><span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul>
                        <li><a href="{{url('admin/manageAdmin')}}" style="color:{{request()->getRequestUri() == '/admin/manageAdmin' ? '': 'white'}}">Add admin</a></li>
                        <li><a href="{{url('admin/viewAdmin')}}" style="color:{{request()->getRequestUri() == '/admin/viewAdmin' ? '': 'white'}}">View admins</a></li>
                    </ul>
                </li>
                </div>

                <div class="{{(request()->getRequestUri() == '/admin/manageUser' || request()->getRequestUri() == '/admin/viewUser') ? 'active': ''}}">
                <li><a><i class="fa fa-cogs"></i><span>Manage users</span><span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul>
                        <li><a href="{{url('admin/manageUser')}}" style="color:{{request()->getRequestUri() == '/admin/manageUser' ? '': 'white'}}">Add user</a></li>
                        <li><a href="{{url('admin/viewUser')}}" style="color:{{request()->getRequestUri() == '/admin/viewUser' ? '': 'white'}}">View users</a></li>
                    </ul>
                </li>
                </div>

                <div class="{{(request()->getRequestUri() == '/admin/manageCenter' || request()->getRequestUri() == '/admin/viewCenter') ? 'active': ''}}">
                <li><a><i class="fa fa-cogs"></i><span>Manage training centers</span><span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul>
                        <li><a href="{{url('admin/manageCenter')}}" style="color:{{request()->getRequestUri() == '/admin/manageCenter' ? '': 'white'}}">Add training centers</a></li>
                        <li><a href="{{url('admin/viewCenter')}}" style="color:{{request()->getRequestUri() == '/admin/viewCenter' ? '': 'white'}}">View training centers</a></li>
                    </ul>
                </li>
                </div>

                <div class="{{(request()->getRequestUri() == '/admin/manageService' || request()->getRequestUri() == '/admin/viewService') ? 'active': ''}}">
                <li><a><i class="fa fa-cogs"></i><span>Manage services</span><span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul>
                        <li><a href="{{url('admin/manageService')}}" style="color:{{request()->getRequestUri() == '/admin/manageService' ? '': 'white'}}">Add service</a></li>
                        <li><a href="{{url('admin/viewService')}}" style="color:{{request()->getRequestUri() == '/admin/viewService' ? '': 'white'}}">View services</a></li>
                    </ul>
                </li>
                </div>

                <div class="{{(request()->getRequestUri() == '/admin/manageArticle' || request()->getRequestUri() == '/admin/viewArticle') ? 'active': ''}}">
                <li><a><i class="fa fa-cogs"></i><span>Manage articles</span><span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul>
                        <li><a href="{{url('admin/manageArticle')}}" style="color:{{request()->getRequestUri() == '/admin/manageArticle' ? '': 'white'}}">Add article</a></li>
                        <li><a href="{{url('admin/viewArticle')}}" style="color:{{request()->getRequestUri() == '/admin/viewArticle' ? '': 'white'}}">View articles</a></li>
                    </ul>
                </li>
                </div>

                <div class="{{(request()->getRequestUri() == '/admin/manageUnansweredFaq' || request()->getRequestUri() == '/admin/manageAnsweredFaq') ? 'active': ''}}">
                    <li><a><i class="fa fa-cogs"></i><span>Manage FAQ's</span><span class="fa fa-angle-right" style="float: right"></span></a>
                        <ul>
                            <li><a href="{{url('admin/manageUnansweredFaq')}}" style="color:{{request()->getRequestUri() == '/admin/manageUnansweredFaq' ? '': 'white'}}">Unanswered Questions</a></li>
                            <li><a href="{{url('admin/manageAnsweredFaq')}}" style="color:{{request()->getRequestUri() == '/admin/manageAnsweredFaq' ? '': 'white'}}">Answered Questions</a></li>
                        </ul>
                    </li>
                </div>

                <div class="{{request()->getRequestUri() == '/admin/manageContact' ? 'active': ''}}">
                    <li><a href="{{url('admin/manageContact')}}"><i class="fa fa-cogs"></i><span>Contact us messages</span></a></li>
                </div>


            </ul>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }
        toggle = !toggle;
    });
</script>
<!--scrolling js-->
<script src={{asset("admin_assets/js/jquery.nicescroll.js")}}></script>
<script src={{asset("admin_assets/js/scripts.js")}}></script>
<!--//scrolling js-->
<script src={{asset("admin_assets/js/bootstrap.js")}}> </script>
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script>CKEDITOR.replace('article-ckeditor');</script>
<!-- mother grid end here-->
</body>
</html>
