@extends('layouts.safetyapp')
@section('title', 'Registration')
@section('body')
    {{-- <!-- Sign up part start -->
    <section id="registration-section" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-xl-6 text-center">
                    <div class="sign-up p-5">
                        <h2>@lang('home.signup')</h2>
                        <p class="first-para mb-0">@lang('home.create_your_account')</p>
                        <div class="small-line"></div>
                        <form action="{{ route('register') }}" method="POST" class="mt-4 needs-validation" novalidate="">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="@lang('home.your_name')" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="@lang('home.email_address')" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="@lang('home.phone_no')" name="phone" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input id="password-field" type="password" class="form-control" name="password" placeholder="@lang('home.password')" required>
                                <span toggle="#password-field" class=""></span>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input id="confirm-password-field" type="password" class="form-control" name="password_confirmation" placeholder="@lang('home.confirm_password')" required>
                                <span toggle="#confirm-password-field"
                                    class="">
                                </span>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <button type="submit" class="btn btn-block mb-2">@lang('home.registration')</button>
                            <p class="text-start second-para">@lang('home.Do_you_have_an_account') <a href="{{ route('login') }}"><strong>@lang('home.login')</strong></a> </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up part end --> --}}
    <div class="login-part sign-up-page vendor-signup my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-9 col-sm-12">
                    <div class="login">
                        <div class="login-section">
                            <h4 class="text-center">Welcome to</h4>
                            <p class="text-center mb-5">Sign Up</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mt-4">
                                    <label for="">Full Name </label>
                                    <input type="text" class="form-control" placeholder="Name" value="{{ old('name') }}" name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <label for="">Phone No.</label>
                                    <input type="text" class="form-control" placeholder="Phone no." value="{{ old('phone') }}" name="phone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
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
                                <div class="mt-4">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Re-enter-password" value="{{ old('password_confirmation') }}" name="password_confirmation">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4 mt-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                </div>
                                <button class="w-100 mb-2" type="submit">Submit</button>
                                <span class="form-text">Already Have a Account ?<a class="text-bolder" href="{{ route('login') }}"> Sign In</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
