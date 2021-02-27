@extends('layouts.admin_layout')

@section('content')
        <div class="pro-head">
            <h2>Users</h2>
        </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @foreach($users as $user)
        <div class="col-md-4 compose" style="margin-top: 2rem">
            <div class="mail-profile">
                <div class="mail-pic">
                    <a href="#"><img src={{asset("images/$user->user_image")}} alt="" style="height:80px; width:80px; border-radius: 50%;"></a>
                </div>
                <div class="mailer-name">
                    <h5><a href="#">{{$user->user_name}}</a></h5>
                    <h6><a href="#">{{$user->user_number}}</a></h6>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="compose-bottom">
                <nav class="nav-sidebar">
                    <ul class="nav tabs">
                        <li><a href="#"><i class="fa fa-star-o"> </i>Age: {{$user->user_age}}</a></li>
                        <li><a href="#"><i class="fa fa-star-o"> </i>National ID: {{$user->national_id}}</a></li>
                        <li class="">
                            <form action="{{ route('admin.manageUser.destroy', $user->user_id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a><i class="fa fa-trash-o"></i><button style="background: none; border: none" type="submit" class="text-danger">Delete</button></a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    @endforeach
@endsection
