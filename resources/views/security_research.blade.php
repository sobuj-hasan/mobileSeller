@extends('layouts.safetyapp')
@section('title', 'Security Research')
@section('body')
    <!-- Security safety part start -->
    <section class="about-contact py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="content">
                        <h5>@lang('home.See_our_best')</h5>
                        <h2>@lang('home.security_and_safety_research')</h2>
                        <div class="small-line"></div>
                    </div>
                </div>
            </div>
            <div class="row py-5 mt-3">
                <div class="col-md-6 align-self-center">
                    <img width="100%" src="{{ asset('safety_assets/img/photos/security-research.png') }}" alt="management">
                </div>
                <div class="col-md-6 align-self-center mt-3 mt-md-0">
                    <h2>@lang('home.feasibility_and_safety_research')</h2>
                    <h4 class="mb-4">@lang('home.safety_research')</h4>
                    <p>@lang('home.feasibility_and_safety_research_text')</p>
                    <p>@lang('home.feasibility_and_safety_research_text2')</p>
                    <p>@lang('home.feasibility_and_safety_research_text3')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Security safety part End -->

    <!-- Gap -->
    <!-- <div class="py-4"></div> -->
@endsection