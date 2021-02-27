@extends('layouts.admin_layout')
@section('content')

        <div class="pro-head">
            <h2>Articles</h2>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row" >
    @foreach($articles as $article)
            <div class="col-lg-6">
    <div class="card" style="background: white; padding: 2rem;">
        <img class="card-img-top" alt="" style="height:300px" src={{asset("images/$article->article_image")}} >
        <div class="card-body">
            <h2 class="card-title" style="margin-top: 1rem; margin-bottom: 1rem;">{{$article->article_title}}</h2>
            <div id="article_body" class="card-text" style="   overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    line-height: 25px;
                                    height: 100px;
                                    -webkit-line-clamp: 6;
                                    -webkit-box-orient: vertical; ">

                {!! $article->article_body !!}
            </div>
        </div>
        <div class="card-body" style="display: flex; flex-direction: row; margin-top: 1rem">
            <a href="{{route('admin.manageArticle.edit', $article->article_id)}}" class="card-link text-warning">Edit</a>

            <form action="{{ route('admin.manageArticle.destroy', $article->article_id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="card-link text-danger" style="border: none; background: none">Delete</button>
            </form>
        </div>
    </div>
</div>
    @endforeach
        </div>
    <div style="display: flex; justify-content: center">
    {{$articles->links()}}
    </div>
@endsection

@section('footer')
    <!--copy rights start here-->
    <div class="copyrights" style=" margin-top: 10rem">
        <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
    <!--COPY rights end here-->

@endsection
