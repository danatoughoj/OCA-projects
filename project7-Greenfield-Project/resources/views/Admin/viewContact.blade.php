@extends('layouts.admin_layout')

@section('content')

    <div class="pro-head">
        <h2>Contact us messages</h2>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @foreach($contacts as $contact)


        <div class="col-md-4">
            <div class="user-marorm">
                <div class="malorum-top malorum-top-contact">
                </div>
                <div class="malorm-bottom">
                    <h4>Name: {{$contact->contact_name}}</h4>
                    <h4>Email: {{$contact->contact_email}}</h4>
                    <p>"{{$contact->contact_message}}"</p>
                    <ul class="malorum-icons">
                        <li>
                            <form action="{{ route('admin.manageContact.destroy', $contact->contact_id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <a><i class="fa fa-trash-o text-danger"> </i>
                                    <div class="tooltip "><span>Delete</span></div>
                                </a>
                                <button style="background: none; border: none" type="submit" class="text-danger">Delete</button>
                            </form>
                          </li>

                    </ul>
                </div>
            </div>
        </div>
    @endforeach
@endsection
