@extends('layouts.safetyapp')
@section('title', 'About Us')
@section('body')
    <!-- About us part start -->
    <section class="about-contact py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="content">
                        <h2>@lang('home.aboutus')</h2>
                        <div class="small-line"></div>
                    </div>
                </div>
            </div>
            <div class="row py-5 mt-3">
                <div class="col-md-6 align-self-center">
                    <img width="100%" src="{{ asset('safety_assets/img/photos/about-page.png') }}" alt="management">
                </div>
                <div class="col-md-6 align-self-center mt-3 mt-md-0">
                    <h2>@lang('home.who_we_are')</h2>
                    <p>@lang('home.aboutus_text')</p>
                    <p>@lang('home.aboutus_text2')</p>
                    <p>@lang('home.aboutus_text3')</p>
                    <p>@lang('home.aboutus_text4')</p>
                    <p>@lang('home.aboutus_text5')</p>
                    <p>@lang('home.aboutus_text6')</p>
                    <p>@lang('home.aboutus_text7')</p>
                    <p>@lang('home.aboutus_text8')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About us part End -->
@endsection