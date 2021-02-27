@extends('layouts.public_layout')

@section('content')

<section class="blog-hero set-bg" data-setbg={{asset("public_assets/img/blog/details/blog-hero.jpg")}}>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="blog__hero__text">
                    <span>Driving tips</span>
                    <h2>{{$article->article_title}}</h2>
                    <ul>
                        <li>{{$article->created_at}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <a href="/articles">Articles</a>
                    <span>{{$article->article_title}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<div class="blog-details ">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="blog__details__content">
                    <div class="blog__details__text">
                        <h2><b>{{$article->article_title}}</b></h2>
                        <p>{!! $article->article_body !!}</p>
                    </div>
                    <div class="blog__details__widget mb-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <p>Tag: Training, Cars, license</p>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog__details__widget__social">
                                    <span>Share:</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comments Section -->
                </div>
            </div>
            <div id="comments_section" class="col-lg-10 mb-5">
                <div class="row d-flex justify-content-center">
                    @if(count($comments))
                    <div class="col-lg-6 col-sm-5 col-md-6 col-12 pb-4 mt-4" style="height:300px;overflow-y:scroll;">
                        @foreach($comments as $comment)
                        <div class="comment mt-4 text-justify float-left" style="background-color:#f2f2f2;padding:1rem;border-radius:1rem;width:400px;">
                        @php $image=$comment->users->user_image; @endphp
                        <img src={{asset("images/$image")}} alt="" class="rounded-circle" width="40" height="40">
                            <span style="font-weight:bold">{{$comment->users->user_name}}</span><br>
                            <p class="ml-5">{{$comment->comment_body}}</p>
                            <p class="mb-0" style="text-align:right">{{$comment->updated_at->format('d.M.y | h:i a')}}</p>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="alert alert-info d-flex align-items-center align-self-center" style="height:100px"> No Comments on this article!</div>
                    @endif
                    @if(Auth::id() != null)
                    <div class="col-lg-5 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 ml-4 mt-4">
                        <form action="/articles/{{$article->article_id}}#comments_section" method="POST" id="algin-form">
                            @method('POST')
                            {{csrf_field()}}
                            <div class="form-group">
                                <h4>Leave a comment</h4> 
                                <textarea name="comment_body" placeholder="add your comment.." msg cols="30" rows="5" class="form-control" required></textarea>
                            </div>                   
                            <div class="form-group"> 
                            <button type="submit" name="comment" class="site-btn second-bg">Post Comment</button>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection