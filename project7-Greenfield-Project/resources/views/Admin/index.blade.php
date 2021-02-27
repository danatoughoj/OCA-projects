@extends('layouts.admin_layout')
@section('content')
    <!--market updates updates-->
    <div class="market-updates" style="margin-top: 5rem">
        <div class="col-md-4 market-update-gd">
            <div class="market-update-block clr-block-1" style="display: flex; align-items: center">
                <div class="col-md-8 market-update-left">
                    <h3>{{$articles}}</h3>
                    <h4>Written Articles</h4>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4 market-update-gd">
            <div class="market-update-block clr-block-2" style="display: flex; align-items: center">
                <div class="col-md-8 market-update-left">
                    <h3>{{$users}}</h3>
                    <h4>Registered User</h4>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4 market-update-gd">
            <div class="market-update-block clr-block-3" style="display: flex; align-items: center">
                <div class="col-md-8 market-update-left">
                    <h3>{{$contacts}}</h3>
                    <h4>Contact Messages</h4>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-envelope-o"> </i>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

@endsection

@section('footer')

    <!--copy rights start here-->
    <div class="copyrights">
        <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
    <!--COPY rights end here-->

@endsection
