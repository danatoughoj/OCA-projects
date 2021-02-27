@extends('layouts.admin_layout')

@section('content')

        <div class="pro-head">
            <h2>Admins</h2>
        </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        @foreach($admins as $admin)
        <div class="col-md-4 compose" style="margin-top: 2rem">
            <div class="mail-profile">
                <div class="mail-pic">
                    <a href="#"><img src={{asset("images/$admin->admin_image")}} alt="" style="height:80px; width:80px; border-radius: 50%;"></a>
                </div>
                <div class="mailer-name">
                    <h5><a href="#">{{$admin->admin_name}}</a></h5>
                    <h6><a>{{$admin->admin_email}}</a></h6>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="compose-bottom">
                <nav class="nav-sidebar">
                    <ul class="nav tabs">
                        <li class=""><a href="{{ route('admin.manageAdmin.edit', $admin->admin_id)}}"><i class="fa fa-pencil-square-o"></i>Edit</a></li>
                        <li class="">
                            <form action="{{ route('admin.manageAdmin.destroy', $admin->admin_id)}}" method="post">
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
