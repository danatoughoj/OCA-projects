@extends('layouts.public_layout')
@section('content')
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
crossorigin="anonymous"
/>
<style>
    .profile {
        background-color: #f3f3f3;
    }
    .center {
        display: grid;
        place-items: center;
    }
    .center-Flex {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 1rem;
    }
    .profContainer {
        display: grid;
        place-items: center;
        position: relative;
    }
    .backProfile {
        overflow: hidden;
        height: 30rem;
        /* max-width: 50rem; */
        display: flex;
    align-items: center;
    /* opacity: 0.5; */
        }
        .profileIMG {
            position: relative;
        }
        .profileIMG img {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            top: -425px;
        }
        .space {
            height: fit-content;
            padding: 2rem;
            margin-top: -350px;
            padding-top: 7rem;
            width: 700px;
            box-shadow: 0 0 5px 0px #555;
            background-color: #f3f3f3fd;
            transition: 0.3s;
        }
        .space:hover , .space:focus {
            box-shadow: 0 0 15px -1px #aaa;

        }
        .spaceX {
            height: 25px;
            width: 500px;
        }
        .formRow {
            padding: 0 4rem;
            display: flex;
            justify-content: space-between;
        }
        .centerProflile {
           
            text-align: center;
        }
        .centerProflile h1 {
            font-size: 2.5rem;
        }
        .centerProflile h3 {
            font-size: 1rem;
        }
      
        .edit {
            margin: 0;
            margin-top: 15px;
            transition: 0.2s;
            width: fit-content;
        }
        .edit:hover {
           color: #0c2b4b;
           transform: scale(1.01);
        }    
        .bold {
            font-weight: bolder;
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

     .file-Input {
        box-sizing: border-box;
        font: 1rem/1.5 "PT Sans", Arial, sans-serif;
        color: #5a5a5a;
     }
     .input {
         display: flex;
         flex-direction: column;
         align-items: flex-end;
     }
</style>

<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wtf-forms.css">

<div class="profile">
    <div class="container profContainer">
        <div class="spaceX"></div>
        <div class="backProfile">
            <img src={{asset("public_assets/img/log-bg.jpg")}} alt="">
        </div>
        <div class="profileIMG center">
            <div class="space">
                <div class="centerProflile">
                    <form action="/profile/{{Auth::user()->user_id}}" class="form" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                      
                        <div class="formRow">
                            
                            <label for="user_image" class="form-label file">{{ __('Profile picture') }}</label>
                            <div class="input">
                                <input id="user_image" aria-label="File browser example" autofocus name="user_image" placeholder="Image" type="file" class=" @error('user_image') is-invalid @enderror" name="user_image" value="{{  Auth::user()->user_image }} " autocomplete="user_image" autofocus>
                                @error('user_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        <hr>
                        <div class="formRow">
                            <label for="user_name" class="form-label">{{ __(' Name') }}</label>
                            <div class="input">
                                <input id="user_name" name="user_name" placeholder="Mohammad Bdour" type="text" class=" @error('user_name') is-invalid @enderror" name="user_name" value="{{  Auth::user()->user_name }} " autocomplete="user_name" autofocus>
                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        <hr>
                        <div class="formRow">
                            <label for="email" class="form-label">{{ __(' Email') }}</label>
                            <div class="input">
                                <input id="email" name="email" placeholder="Mohammad Bdour" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{  Auth::user()->email }} " autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        <hr>
                        <div class="formRow">
                            <label for="user_number" class="form-label">{{ __('Phone Number') }}</label>
                        <div class="input">
                            <input id="user_number" type="number" class=" @error('user_number') is-invalid @enderror" name="user_number" value="{{Auth::user()->user_number }}" required placeholder="0777777777" autocomplete="user_number">  
                            @error('user_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        <hr>

                        <div class="formRow">
                            <label for="national_id" class="form-label">{{ __('National ID') }}</label>
                        <div class="input">
                            <input id="national_id" type="number" class=" @error('national_id') is-invalid @enderror" name="national_id" value="{{Auth::user()->national_id }}" placeholder="----------" autocomplete="national_id">  
                            @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        <hr>
                
                        <div class="formRow">
                            <label for="user_age" class="form-label">{{ __(' Age') }}</label>
                            <div class="input">
                            <input id="user_age" type="number" placeholder="24" class=" @error('user_age') is-invalid @enderror" name="user_age" value="{{Auth::user()->user_age }}" required autocomplete="user_age">
                            @error('user_age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        <hr>
                
                        <div class="formRow">
                            <label for="user_password" class="form-label">{{ __('Password') }}</label>
                            <div class="input">
                            <input id="user_password" type="password" placeholder="**********" class=" @error('user_password') is-invalid @enderror" name="user_password" required autocomplete="new-user_password">
                            @error('user_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        {{-- <input type="text" name="user_name" placeholder="Date & time" class="datepicker_pop"> --}}
                        <div class="center-Flex">
                            <button class=" site-btn second-bg edit" type="submit" >
                            {{__("Done")}}
                            </button>
                            <a href="/profile" type="submit" >  <div >
                                  <p class="site-btn second-bg edit">Cancel </p>
                              </div>
                            </a>
                          </div>                   
                         </form>
                    
                 
                </div>
                
            </div>
            <div class="spaceX"></div>
            @if (isset(Auth::user()->user_image ))
            <?php 
             $image = Auth::user()->user_image;
            ?>
            <img src={{asset("images/$image")}} alt="">
            @else
            <img src={{asset("public_assets/img/team/paceholder.jpg")}} alt="">
            @endif
        </div>
     
    </div>
</div>
@endsection
