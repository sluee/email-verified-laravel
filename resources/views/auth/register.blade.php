@extends('base')

@section('content')


         <div class="wrapper bg-white">
        <div class="h2 text-center text-bold">RQR HOMES </div>
        <div class="h4 text-muted text-center pt-2 ">Enter your login details</div>
        <form class="pt-3" action="{{'/register'}}" method="POST">
        {{csrf_field()}}
        <div class="form-group py-2">
            <label for="name">Name</label>
            <div class="input-field"> <span><i class="fa-solid fa-user" style="color: #6a4ade;"></i></span> <input type="text" placeholder="Pedro Penduko" name="name" id="name"> </div>
            @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <div class="form-group py-2">
            <label for="email">Email</label>
            <div class="input-field"> <span><i class="fa-solid fa-user" style="color: #6a4ade;"></i></span> <input type="text" placeholder="sample@mail.com"  name="email" id="email"> </div>
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group py-1 pb-2">
            <label for="password">Password</label>
            <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="password" placeholder="********" name="password" id="password"  > <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
            @error('password')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group py-1 pb-2">
            <label for="password_confirmation">Confirm Password</label>
            <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="password" placeholder="********"  name="password_confirmation" id="password_confirmation"> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
            @error('password_confirmation')
                s<p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="d-flex align-items-start">
            {{-- <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div> --}}

             <button class="btn btn-block text-center my-3  px-5 flex-grow-1 ">Register</button>
        </div>

        <div class="text-center pt-3 text-muted">Already have an account?   <a href="{{'/'}}">login here</a></div>
        </form>
        </div>

        <style scoped>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');

        * {
        padding: 0;
        margin: 0;
        box-sizing: border-box
        }

        body {
        background-color: #eee;
        font-family: 'Poppins', sans-serif;
        background:linear-gradient( to top, #fff 10%, rgb(93,42,141,0.4)90%) no-repeat
        /* linear-gradient(to top, #fff 10%, rgba(93, 42, 141, 0.4) 90%) no-repeat */
        }

        .wrapper {
        max-width: 500px;
        border-radius: 10px;
        margin: 50px auto;
        padding: 30px 40px;
        box-shadow: 20px 20px 80px rgb(206, 206, 206)

        }

        .h2 {
        font-family: 'Kaushan Script', cursive;
        font-size: 3.5rem;
        font-weight: bold;
        color: purple;
        font-style: italic
        }

        .h4 {
        font-family: 'Poppins', sans-serif
        }

        .input-field {
        border-radius: 5px;
        padding: 5px;
        display: flex;
        align-items: center;
        cursor: pointer;
        border: 1px solid #400485;
        color: #400485
        }

        .input-field:hover {
        color: #7b4ca0;
        border: 1px solid #7b4ca0
        }

        input {
        border: none;
        outline: none;
        box-shadow: none;
        width: 100%;
        padding: 0px 2px;
        font-family: 'Poppins', sans-serif
        }

        .fa-eye-slash.btn {
        border: none;
        outline: none;
        box-shadow: none
        }

        a {
        text-decoration: none;
        color: #400485;
        font-weight: 700
        }

        a:hover {
        text-decoration: none;
        color: #7b4ca0
        }

        .option {
        position: relative;
        padding-left: 30px;
        cursor: pointer
        }

        .option label.text-muted {
        display: block;
        cursor: pointer
        }

        .option input {
        display: none
        }

        .checkmark {
        position: absolute;
        top: 3px;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 50%;
        cursor: pointer
        }

        .option input:checked~.checkmark:after {
        display: block
        }

        .option .checkmark:after {
        content: "";
        width: 13px;
        height: 13px;
        display: block;
        background: #400485;
        position: absolute;
        top: 48%;
        left: 53%;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 300ms ease-in-out 0s
        }

        .option input[type="radio"]:checked~.checkmark {
        background: #fff;
        transition: 300ms ease-in-out 0s;
        border: 1px solid #400485
        }

        .option input[type="radio"]:checked~.checkmark:after {
        transform: translate(-50%, -50%) scale(1)
        }

        .btn.btn-block {
        border-radius: 20px;
        background-color: #400485;
        color: #fff
        }

        .btn.btn-block:hover {
        background-color: #55268be0
        }

        @media(max-width: 575px) {
        .wrapper {
        margin: 10px
        }
        }

        @media(max-width:424px) {
        .wrapper {
        padding: 30px 10px;
        margin: 5px
        }

        .option {
        position: relative;
        padding-left: 22px
        }

        .option label.text-muted {
        font-size: 0.95rem
        }

        .checkmark {
        position: absolute;
        top: 2px
        }

        .option .checkmark:after {
        top: 50%
        }

        #forgot {
        font-size: 0.95rem
        }
        }
        </style>
