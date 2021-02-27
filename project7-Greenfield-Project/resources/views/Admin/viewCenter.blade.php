@extends('layouts.admin_layout')

@section('content')
    <div class="pro-head">
        <h2>Training Centers</h2>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="product-block">
    @foreach($centers as $center)
    <div class="col-md-3 product-grid">
        <div class="product-items">
            <div class="project-eff">
                <img class="img-responsive" src={{asset("images/$center->center_image")}} alt="" style="height: 200px">
            </div>
            <div class="produ-cost" style="background: #0c2b4a; text-align: center">
                <h4>{{$center->center_name}}</h4>
                <h5>{{$center->center_location}}</h5>
                <div style="margin-top: 1rem; display: flex; flex-direction: row; justify-content: center">
                <a href="{{route('admin.manageCenter.edit', $center->center_id)}}"><button class="btn btn-warning" style="margin: 5px">Edit</button></a>

                <form action="{{ route('admin.manageCenter.destroy', $center->center_id)}}" method="post">
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
