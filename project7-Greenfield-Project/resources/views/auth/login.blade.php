@extends('layouts.public_layout')
@section('content')
<style>
    .MyContainer {
        display: grid;
        place-items: center;
        position: relative;
        overflow: hidden;
       margin-top: 6rem;
    }
    .myRow{
       justify-content: space-around;
       align-items: center;
       width: 98vw;
       margin: 2rem 0;
    }
    .h_line {
        height: 20rem;
        max-height: 75vh;
        width: 1px;
        background-color: black;
        box-shadow: 0 0 1px 0px #000;
    }
    input::placeholder {
        color: #ccc !important;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type='number'] {
    -moz-appearance: textfield;
     }

     .bacimg {
        position: absolute;
        opacity: 0.01;
    }
    .course__details__sidebar__register form {
        background: #f5f5f5;
        /* box-shadow: 0 5px 5px 5px #f5f5f5; */
        
        }
    .course__details__sidebar__register form input {
        margin: 0;
    }
    .course__details__sidebar__register .site-btn  {
        margin-top: 20px ;
        }

    label {
        margin-bottom: 0.2rem;
    }
    hr {
        margin: 0.3rem;
    }
 
    @media only screen and (max-width: 999px) {
        .h_line {
        height: 1px;
        max-height: 75vh;
        width: 70%;
        background-color: black;
        box-shadow: 0 0 1px 0px #000;
        margin: 3rem 0;
        }
        .myRow{
            
            justify-content: center;
            align-items: center;
            width: 100vw;
            margin: 2rem 0;
        }
    } 
   

</style>

<div class="MyContainer">
    <div class="bacimg">
        <img src={{asset("public_assets/img/log-bg.jpg")}} alt="">
    </div>
<div class="row myRow ">
     <div class="course__details__sidebar__register  col-lg-4">
        <h5>{{ $title }}</h5>
        <form action="{{ $loginRoute }}" method="POST">
            @csrf
            <div class="">
                <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                <input id="email"  type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="mhmd@dream.com" autocomplete="email" >  
                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <hr>
            <div class="">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" placeholder="**********" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            {{-- <input type="text" class="referrer" > --}}
            {{-- <input type="text" placeholder="Date & time" class="datepicker_pop"> --}}
            <button type="submit" class="site-btn second-bg">{{ __('Login') }}</button>
            @if($title != "Admin Login")
            <a href="{{ route('register') }}" class="btn Admin">{{ __('register Now') }}</a>
            @endif
        </form>
    </div>
</div>
</div>

@endsection
