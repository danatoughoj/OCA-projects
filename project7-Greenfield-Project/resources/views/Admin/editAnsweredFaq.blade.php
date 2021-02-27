@extends('layouts.admin_layout')
@section('content')

    <div class="container-fluid">
        <div class="row" style="display: flex; justify-content: center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-title"  style="background: #0c2b4a; color: white; margin: 0; padding: 1rem">
                        <h2 class="text-center title-2">Edit the Question</h2>
                    </div>
                    <div class="card-body"  style="background: white; padding: 3rem">
                        <hr>
                        <form action="{{ route('admin.manageAnsweredFaq.update', $faq->question_id)}}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="question_context" class="control-label mb-1">Question context</label>
                                <input  name="question_context" type="text" class="form-control" value="{{ $faq-> question_context }}">
                            </div>

                            <div class="form-group">
                                <label for="question_answer" class="control-label mb-1">Question-answer</label>
                                <textarea name="question_answer" class="form-control">{{ $faq-> question_answer }}</textarea>
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
