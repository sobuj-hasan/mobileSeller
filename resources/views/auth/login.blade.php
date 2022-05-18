@extends('layouts.safetyapp')
@section('title', 'Login')
@section('body')
    <div class="login-part sign-up-page vendor-signup my-5">
        <div class="container py-lg-4">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-9 col-sm-12">
                    <div class="login">
                        <div class="login-section">
                            <h4 class="text-center">Welcome to</h4>
                            <p class="text-center mb-5">Sign In</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mt-4">
                                    <label for="">Email Address</label>
                                    <input type="text" class="form-control" placeholder="Email" value="{{ old('email') }}" name="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" value="{{ old('password') }}" name="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4 mt-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                </div>
                                <button class="w-100 mb-2" type="submit">Submit</button>
                                <span class="form-text">Don't Have any account ?<a class="text-bolder" href="{{ route('register') }}"> Sign Up</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


