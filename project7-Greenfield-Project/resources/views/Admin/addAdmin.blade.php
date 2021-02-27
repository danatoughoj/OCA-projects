@extends('layouts.admin_layout')
@section('content')
        <div class="container-fluid">
            <div class="row" style="display: flex; justify-content: center">
                <div class="col-lg-8">
                    <div class="card">
                            <div class="card-title"  style="background: #0c2b4a; color: white; margin: 0; padding: 1rem">
                                <h2 class="text-center title-2">Create Admin</h2>
                            </div>
                        <div class="card-body" style="background: white; padding: 3rem">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <form action="/admin/manageAdmin" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="admin_name" class="control-label mb-1">Admin Name</label>
                                    <input  name="admin_name" type="text" class="form-control" value="{{ old('admin_name') }}">
                                    @if ($errors->has('admin_name'))
                                        <div class="text-danger">{{ $errors->first('admin_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="admin_email" class="control-label mb-1">Admin Email</label>
                                    <input  name="admin_email" type="email" class="form-control" value="{{ old('admin_email') }}">
                                    @if ($errors->has('admin_email'))
                                        <div class="text-danger">{{ $errors->first('admin_email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="admin_password" class="control-label mb-1">Admin Password</label>
                                    <input  name="admin_password" type="password" class="form-control" value="{{ old('admin_password') }}">
                                    @if ($errors->has('admin_password'))
                                        <div class="text-danger">{{ $errors->first('admin_password') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="admin_image" class="control-label mb-1">Admin Image</label>
                                    <input  name="admin_image" type="file" class="form-control">
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
    <div class="copyrights">
        <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
    <!--COPY rights end here-->

@endsection


