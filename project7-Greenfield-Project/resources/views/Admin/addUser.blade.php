@extends('layouts.admin_layout')

@section('content')
    <div class="container-fluid" >
        <div class="row" style="display: flex; justify-content: center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-title"  style="background: #0c2b4a; color: white; margin: 0; padding: 1rem">
                        <h2 class="text-center title-2">Create User</h2>
                    </div>
                    <div class="card-body" style="background: white; padding: 3rem">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="/admin/manageUser" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="user_name" class="control-label mb-1">User Name</label>
                                <input  name="user_name" type="text" class="form-control" value="{{ old('user_name') }}">
                                @if ($errors->has('user_name'))
                                    <div class="text-danger">{{ $errors->first('user_name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="national_id" class="control-label mb-1">User National ID</label>
                                <input  name="national_id" type="text" class="form-control" value="{{ old('national_id') }}">
                                @if ($errors->has('national_id'))
                                    <div class="text-danger">{{ $errors->first('national_id') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="user_number" class="control-label mb-1">User Number</label>
                                <input  name="user_number" type="tel" class="form-control" value="{{ old('user_number') }}">
                                @if ($errors->has('user_number'))
                                    <div class="text-danger">{{ $errors->first('user_number') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="user_age" class="control-label mb-1">User Age</label>
                                <input  name="user_age" type="number" class="form-control" value="{{ old('user_age') }}">
                                @if ($errors->has('user_age'))
                                    <div class="text-danger">{{ $errors->first('user_age') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="user_password" class="control-label mb-1">User Password</label>
                                <input  name="user_password" type="password" class="form-control" value="{{ old('user_password') }}">
                                @if ($errors->has('user_password'))
                                    <div class="text-danger">{{ $errors->first('user_password') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="user_image" class="control-label mb-1">User Image</label>
                                <input  name="user_image" type="file" class="form-control">
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
    <div class="copyrights" style="margin-top: 10rem">
        <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
    <!--COPY rights end here-->

@endsection
