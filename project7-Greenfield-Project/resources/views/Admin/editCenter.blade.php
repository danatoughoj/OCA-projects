@extends('layouts.admin_layout')
@section('content')

    <div class="container-fluid">
        <div class="row" style="display: flex; justify-content: center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-title"  style="background: #0c2b4a; color: white; margin: 0; padding: 1rem">
                        <h2 class="text-center title-2">Edit Training Center</h2>
                    </div>
                    <div class="card-body"  style="background: white; padding: 3rem">
                        <hr>
                        <form action="{{ route('admin.manageCenter.update', $center->center_id)}}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="center_name" class="control-label mb-1">Center Name</label>
                                <input  name="center_name" type="text" class="form-control" value="{{ $center-> center_name }}">
                                @if ($errors->has('center_name'))
                                    <div class="alert alert-danger">{{ $errors->first('center_name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="center_location" class="control-label mb-1">Admin Email</label>
                                <input  name="center_location" type="text" class="form-control" value="{{ $center-> center_location }}">
                                @if ($errors->has('center_location'))
                                    <div class="alert alert-danger">{{ $errors->first('center_location') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="center_image" class="control-label mb-1">Center Image</label>
                                <input  name="center_image" type="file" class="form-control">
                            </div>
                            <div style="display: flex; justify-content: center">
                                <button id="payment-button" type="submit" class="btn btn-lg" style="background: #f3be00; color:white; width: 50%" name="submit">Update
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
    <div class="copyrights">
        <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
    <!--COPY rights end here-->

@endsection
