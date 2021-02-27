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
            justify-content: space-around;
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
     .user_icon {
            margin: 0;
            color: inherit;
        }
        .edit {
            margin-top: 15px;
            transition: 0.2s;
            width: fit-content;
            color: #f3bd00;
        }
        .edit:hover {
           color: #0c2b4b;
           transform: scale(1.05);

        }
        .user_icon i {
            font-size: 2rem;
        }     
        .bold {
            font-weight: bolder;

        }
</style>

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

                      
                    
                        <div class="center">
                            <h1>{{ Auth::user()->user_name }}</h1>
                        </div>
                        <hr>
                        <div class="formRow">
                            <label for="user_number" class="form-label">{{ __('Phone Number') }}</label>
                            @if(isset(Auth::user()->user_number))
                                <h3>{{ Auth::user()->user_number }}</h3>
                                @else
                                <a class="primary-btn" href="/profile/{{Auth::user()->user_id}}/edit">Enter Number</a>
                            @endif
                        </div>
                        <hr>

                        <div class="formRow">
                            <label for="national_id" class="form-label">{{ __('National ID') }}</label>
                            @if(isset(Auth::user()->national_id))
                                <h3>{{Auth::user()->national_id}}</h3>
                                @else
                                <a class="primary-btn" href="/profile/{{Auth::user()->user_id}}/edit">Enter ID</a>
                            @endif
                        </div>
                        <hr>
                
                        <div class="formRow">
                            <label for="user_age" class="form-label">{{ __(' Age') }}</label>
                            @if(isset(Auth::user()->user_age))
                                <p> {{ Auth::user()->user_age }}</p>
                                @else
                                <a class="primary-btn" href="/profile/{{Auth::user()->user_id}}/edit">Enter age</a>
                            @endif
                        </div>
                        <hr>
                          <div class="center">
                            <a href="/profile/{{Auth::user()->user_id}}/edit">  
                            <div class="edit">
                                  <p class="user_icon"><i class="fas fa-user-edit"></i></p>
                                  <p class="user_icon">Edit Profile </p>
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
        <div class="col-lg-12 col-sm-5 col-md-6 col-12 pb-4 mt-4 d-flex justify-content-center" style="height:250px;overflow-y:scroll;">
            @foreach(Auth::user()->services as $service)
            <div class="comment mt-4 text-justify float-left" style="background-color:lightgray;padding:1rem;border-radius:1rem;width:600px;">
            @php $image=$service->service_image; @endphp
            <img src={{asset("images/$image")}} alt="" width="200" height="200">
                <p style="font-weight:bold">{{$service->service_name}}</p><br>
                <p class="ml-5">{{$service->service_type}}</p>
                <form action="/paywithpaypal" method="POST">
                @method('POST')
                {{csrf_field()}}
                <button type="submit" class="primary-btn" name="paypal">Pay Online</buuton>
                </form>
                <p class="mb-0" style="text-align:right">{{$service->updated_at->format('d.M.y | h:i a')}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

