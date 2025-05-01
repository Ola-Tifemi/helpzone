@extends('layouts.site')

@section('title', 'HelpZone: Login')

@section('main_content')
<div class="row ">
    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3" style="margin-top: 200px; margin-bottom:200px">
                    <h3>Log In.</h3>
        <div class="my-5">
            
            <form action="{{ route('login')}}" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email"  autocomplete="off" placeholder="Enter your email..." data-sb-validations="required,email" name="email" />
                    <label for="email">Email address</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    @error('email')
                    <div class="alert alert-danger mb-2">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" type="password" autocomplete="off" placeholder="Enter password..." data-sb-validations="required" name="password"/>
                    <label for="password">Enter Password</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">Password is required.</div>
                    @error('password')
                    <div class="alert alert-danger mb-2">{{ $message }}</div>
                @enderror
                </div>
                <br />
                <!-- Submit Button-->
                <button class="btn btn-danger col-12 text-uppercase" id="submitButton" type="submit">LOG IN</button>
            </form>
        </div>
    </div>
</div>        

@endsection