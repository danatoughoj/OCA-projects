@extends('layouts.public_layout')
@section('content')
<!-- Breadcrumb Begin -->

<div class="breadcrumb-option" style="margin-top:8.5rem">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            @if(isset($searched))
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <span>Search / {{$searched}}</span>
                </div>
            @else
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <span>Srevices</span>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Pricing Section Begin -->
<section class="pricing pricing--page spad pt-4">
    <div class="container">
        @if(isset($searched))
        <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>search results for {{$searched}}</h2>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Get Special services</span>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
        @endif
       
        <div class="row">
        @foreach($services as $service)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="pricing__item__title">
                        <span>{{$service->trainingCenters->center_name}}</span>
                        <h2>{{$service->service_price}} JOD</h2>
                        <h5>{{$service->service_name}}</h5>
                    </div>
                    <ul>
                        <li style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    line-height: 25px;    
                                    max-height: 100px;     
                                    -webkit-line-clamp: 6;
                                    -webkit-box-orient: vertical;">
                            {{$service->service_desc}}
                        </li>
                    </ul>
                    <a href="/service/{{$service->service_id}}" class="primary-btn second-bg">Book Now</a>
                </div>
            </div>
        @endforeach
        </div>
        <div class="col-lg-12">
            <div class="row d-flex justify-content-center">
                {{$services->links()}}
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section End -->
@endsection
