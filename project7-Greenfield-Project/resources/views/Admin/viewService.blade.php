@extends('layouts.admin_layout')

@section('content')
        <div class="pro-head">
            <h2>Services</h2>
        </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="product-block">
        @foreach($services as $service)
            <div class="col-md-3 product-grid">
                <div class="product-items">
                    <div class="project-eff">
                        <img class="img-responsive" src={{asset("images/$service->service_image")}} alt="" style="height: 200px">
                    </div>
                    <div class="produ-cost" style="background: #0c2b4a; text-align: center">
                        <span style="color: #f3be00"> {{$service->center_name}} </span>
                        <h4>{{$service->service_name}}</h4>
                        <h5 style="color: #f3be00">{{$service->service_price}} JOD</h5>
                        <h5>{{$service->service_type}}</h5>
                        <p style="color: white; margin-top: 10px; font-size: 10px;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    line-height: 25px;    
                                    height: 100px;     
                                    -webkit-line-clamp: 6;
                                    -webkit-box-orient: vertical;">
                            {{$service->service_desc}}
                        </p>
                        <div style="margin-top: 1rem; display: flex; flex-direction: row; justify-content: center">
                            <a href="{{route('admin.manageService.edit', $service->service_id)}}"><button class="btn btn-warning" style="margin: 5px">Edit</button></a>

                            <form action="{{ route('admin.manageService.destroy', $service->service_id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" style="margin: 5px">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="clearfix"> </div>
    </div>

@endsection
