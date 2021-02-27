@extends('layouts.public_layout')
@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option" style="margin-top:4rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Traning Centers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Courses Section Begin -->
    <section class="courses spad pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our Great Team</span>
                        <h2>Our Training Centers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($training_centers as $center)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course__item">
                            <img src={{asset("images/$center->center_image")}} alt="">
                            <h5>{{$center->center_name}}</h5>
                            <h4>{{$center->center_location}}</h4>
                            <a href="/training_centers/{{$center->center_id}}/services">View Center Services</a>
                        </div>
                    </div> 
                @endforeach     
            </div>
            <div class="col-lg-12">
                <div class="row d-flex justify-content-center">
                    {{$training_centers->links()}}
                </div>
            </div>
        </div>
    </section>
    <!-- Courses Section End -->

    @endsection
