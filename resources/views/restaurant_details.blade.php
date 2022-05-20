@extends('layouts.safetyapp')
@section('title', 'Restaurant Details')
@section('body')
    <!-- RESTAURANT DETAILS PART START -->
    <section class="food-details-banner py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="details-banner">
                        <h3 class="mb-3">{{ $single_restaurant->res_name }}</h3>
                        <img src="{{ asset('assets/img/restaurant') }}/{{ $single_restaurant->res_image }}" alt="details-banner">
                    </div>
                    <div class="starting">
                        <h5 class="mt-3"><span>Open (24/7 Hour Delivery)</span> </h5>
                        <p class="paragraph">
                            {{ $single_restaurant->description }}
                        </p>
                        <p>{{ $single_restaurant->address }}, {{ $single_restaurant->city }}, {{ $single_restaurant->country }}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mt-lg-5">
                <h3 class="mb-3">Reviews</h3>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-2">
                    <div class="review-card">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/img/users/default.png') }}" alt="user-photo">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Rizqon Maulana</h6>
                                <p>114 written reviews</p>
                            </div>
                        </div>
                        <div class="star-point d-flex">
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="time">
                                <span class="ms-3">29 August 2020</span>
                            </div>
                        </div>
                        <p class="mt-2">Kepiting sausnya maknyuss banget, bakal sering kesini bareng keluarga atau kalau ada temen/kerabat datang ke Balikpapan
                        bawa aja kesini recommended banget!</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-2">
                    <div class="review-card">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/img/users/user2.png') }}" alt="user-photo">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Nabilah Sari</h6>
                                <p>Today</p>
                            </div>
                        </div>
                        <div class="star-point d-flex">
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="time">
                                <span class="ms-3">29 August 2020</span>
                            </div>
                        </div>
                        <p class="mt-2">Kepiting sausnya maknyuss banget, bakal sering kesini bareng keluarga atau kalau ada temen/kerabat datang ke Balikpapan
                        bawa aja kesini recommended banget!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RESTAURANT DETAILS PART END -->

    <!-- RESTAURANT WISE FOOD PART START -->
    <section class="resturant-foods py-4">
        <div class="container mb-5">
            <h4>Restaurant Foods Menu</h4>
            <div class="row">
                @forelse ($restaurant_foods as $restaurant_food)
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                        <div class="card">
                            <a href="{{ route('food.details', $restaurant_food->id) }}">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/foods') }}/{{ $restaurant_food->image }}" alt="food">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mt-3">{{ $restaurant_food->name }}</h5>
                                        <p>{{ Str::limit($restaurant_food->description, 110, $end='...') }}</p>
                                        <h6>{{ $restaurant_food->price }} SAR</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @empty
                    <span class="text-danger">Nothing to show any foods</span>
                @endforelse
            </div>
            {{-- <div class="load-more text-center my-5">
                <a href="#">Load More</a>
            </div> --}}
        </div>
    </section>
    <!-- RESTAURANT WISE FOOD PART END -->
@endsection

