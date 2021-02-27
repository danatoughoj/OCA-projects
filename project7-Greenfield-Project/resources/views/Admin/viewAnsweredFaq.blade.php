@extends('layouts.admin_layout')

@section('content')

    <div class="pro-head">
        <h2>Answered questions</h2>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @foreach($faqs as $faq)


        <div class="col-md-4">
            <div class="user-marorm">
                <div class="malorum-top malorum-top-faq">
                </div>
                <div class="malorm-bottom">
                    <h4>Name: {{$faq->question_owner_name}}</h4>
                    <h4>Email: {{$faq->question_owner_email}}</h4>
                    <p>"{{$faq->question_context}}"</p>
                    <ul class="malorum-icons">
                        <li>
                            <a href="{{route('admin.manageAnsweredFaq.edit', $faq->question_id)}}"><i class="fa fa-edit text-success"> </i>
                                <div class="tooltip"><span>Edit</span></div>
                            </a>
                            <button style="background: none; border: none" type="submit" class="text-success">Edit</button>
                        </li>
                        <li>
                            <form action="{{ route('admin.manageAnsweredFaq.destroy', $faq->question_id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a><i class="fa fa-trash-o text-danger"> </i>
                                    <div class="tooltip"><span>Discard</span></div>
                                </a>
                                <button style="background: none; border: none" type="submit" class="text-danger">Discard</button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    @endforeach
@endsection
