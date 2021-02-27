@extends('layouts.public_layout')
@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option" style="margin-top:8.5rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Articles</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<!-- Recent Blog Section Begin -->
<section class="recent-blog pt-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-title center-title">
                    <h2>Our Articles</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    @if(count($articles) > 0)
                    @foreach($articles as $article)

                    <div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src={{asset("images/$article->article_image")}} alt="">
                            </div>
                            <div class="blog__item__text">
                                <span>Driving tips</span>
                                <h5><a href="/articles/{{$article->article_id}}">{{$article->article_title}}</a></h5>

                                <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    line-height: 25px;    
                                    max-height: 100px;     
                                    -webkit-line-clamp: 6;
                                    -webkit-box-orient: vertical;">{!! $article->article_body !!}</div>
                                <ul>
                                    <li>{{$article->created_at->format('d.M.y | h:i a')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @else
                    <p>No articles</p>

                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row d-flex justify-content-center">
            {{$articles->links()}}
        </div>
    </div>
</section>
<section class="faq spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="faq__accordion">
                    <div class="section-title">
                        <span>customer support</span>
                        <h2>Frequently asked questions</h2>
                    </div>
                    <div class="accordion" id="accordionExample">

                        @foreach($questions as $question)
                        <div class="card">
                            <div class="card-heading active">
                                <a data-toggle="collapse" data-target="#collapseOne">
                                    {{$question->question_context}}</a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>{{$question->question_answer}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="faq__form">
                    <div class="section-title">
                        <span>ADD Question</span>
                        <h2>Have a question</h2>
                        @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                        @endif
                    </div>
                    <form action="articles" method="post">
                        {{csrf_field()}}
                        <input name='name' type="text" placeholder="Name" value="{{old('name')}}">
                        @if($errors->has('name'))
                        <div class='text-danger'>{{$errors->first('name')}}</div>
                        @endif
                        <input name='email' type="text" placeholder="Email" value="{{old('email')}}">
                        @if($errors->has('email'))
                        <div class='text-danger'>{{$errors->first('email')}}</div>
                        @endif
                        <textarea name='context' placeholder="Question">{{old('context')}}</textarea>
                        @if($errors->has('context'))
                        <div class='text-danger'>{{$errors->first('context')}}</div>
                        @endif
                        <button type="submit" class="site-btn">Send Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Blog Section End -->

@endsection