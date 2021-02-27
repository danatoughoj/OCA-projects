@extends('layouts.admin_layout')
@section('content')

    <div class="container-fluid">
        <div class="row" style="display: flex; justify-content: center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-title"  style="background: #0c2b4a; color: white; margin: 0; padding: 1rem">
                        <h2 class="text-center title-2">Edit Service</h2>
                    </div>
                    <div class="card-body"  style="background: white; padding: 3rem">
                        <hr>
                        <form action="{{ route('admin.manageService.update', $service->service_id)}}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="service_name" class="control-label mb-1">Service Name</label>
                                <input  name="service_name" type="text" class="form-control" value="{{$service->service_name}}">
                                @if ($errors->has('service_name'))
                                    <div class="text-danger">{{ $errors->first('service_name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="center_id" class="control-label mb-1">Center Name</label>
                                <select  name="center_id" class="form-control" value="{{$service->center_id}}">
                                    @foreach($centers as $center)
                                        <option value="{{$center->center_id}}">{{$center->center_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="service_type" class="control-label mb-1">Service type</label>
                                <select name="service_type" class="form-control" value="{{$service->service_type}}">
                                    <option value="Automatic">Automatic</option>
                                    <option value="Manual">Manual</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="service_desc" class="control-label mb-1">Service description</label>
                                <textarea name="service_desc" class="form-control">{{$service->service_desc}}</textarea>
                                @if ($errors->has('service_desc'))
                                    <div class="text-danger">{{ $errors->first('service_desc') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="service_price" class="control-label mb-1">Service Price</label>
                                <input  name="service_price" type="number" class="form-control" value="{{$service->service_price}}">
                                @if ($errors->has('service_price'))
                                    <div class="text-danger">{{ $errors->first('service_price') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="service_image" class="control-label mb-1">Service Image</label>
                                <input  name="service_image" type="file" class="form-control">
                                @if ($errors->has('service_image'))
                                    <div class="text-danger">{{ $errors->first('service_image') }}</div>
                                @endif
                            </div>

                            <div style="display: flex; justify-content: center">
                                <button id="payment-button" type="submit" class="btn btn-lg" style="background: #f3be00; color:white; width: 50%" name="submit">Add
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

    <!--copy rights start here-->
    <div class="copyrights" style="margin-top: 15rem">
        <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
    <!--COPY rights end here-->

@endsection
