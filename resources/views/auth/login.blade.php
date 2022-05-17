@extends('layouts.safetyapp')
@section('title', 'Login')
@section('body')
     <!-- Login part start -->
    <section id="registration-section" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-xl-6 text-center">
                    <div class="sign-up p-5">
                        <h2>@lang('home.signin')</h2>
                        <p class="first-para">@lang('home.login_your_account')</p>
                        <form action="{{ route('login') }}" method="POST" class="mt-5 needs-validation" novalidate="">
                            @csrf
                            <div class="mb-4">
                                <input type="text" class="form-control" placeholder="@lang('home.email_address')" name="email" value="{{ old('email') }}" required="">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <input id="password-field" type="password" class="form-control" name="password" placeholder="@lang('home.password')" required="">
                                <span toggle="#password-field" class=""></span>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-block mb-2">@lang('home.login')</button>
                            <p class="text-start second-para">@lang('home.Do_you_have_an_account') <a href="{{ route('register') }}"><strong>@lang('home.signup')</strong></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login part end -->
@endsection


