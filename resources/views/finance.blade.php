@extends('layouts.safetyapp')
@section('title', 'Finance')
@section('body')
    <!-- Finance part start -->
    <section class="about-contact py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="content">
                        <h5>@lang('home.See_Best_opportunity')</h5>
                        <h2>@lang('home.Finance_and_investment')</h2>
                        <div class="small-line"></div>
                    </div>
                </div>
            </div>
            <div class="row py-5 mt-3">
                <div class="col-md-6 align-self-center">
                    <img width="100%" src="{{ asset('safety_assets/img/photos/finance-page.png') }}" alt="management">
                </div>
                <div class="col-md-6 align-self-center mt-3 mt-md-0">
                    <h2>@lang('home.Partnership_Investment')</h2>
                    <p>@lang('home.Partnership_Investment_article')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Finance part End -->

    <!-- Gap -->
    <!-- <div class="py-4"></div> -->
@endsection