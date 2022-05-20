@extends('layouts.safetyapp')
@section('title', 'Home Page')
@section('body')
    <!-- BANNER SECTION START -->
    <section class="banner-part">
        <div class="banner-overlay">
            <div class="container text-center pt-3">
                <h2 class="pt-5 pb-4">Explore the best food in The Mobile Seller</h2>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION START --> 
    <!-- FOODS PART START -->
    <section class="foods-part my-5">
        <div class="container">
            <h3>Best Choice </h3>
            <p class="paragraph">These are our six best collections that you can find around City.</p>
            <div class="row justify-content-center">
                @foreach ($restaurants as $restaurant)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 my-3">
                        <div class="card">
                            <img src="{{ asset('assets/img/restaurant') }}/{{ $restaurant->res_image }}" class="card-img-top" alt="food-img">
                            <div class="card-body">
                                <h5 class="card-title">{{ $restaurant->res_name }}</h5>
                                <p class="paragraph">
                                    {{ Str::limit($restaurant->description, 120, $end='...') }}
                                </p>
                                <a href="{{ route('restaurant.details', $restaurant->id) }}" class="custom-btn">View Details &nbsp;<i class="fa-solid fa-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- FOODS PART END -->

    <!-- NEW TASTE SLIDER PART START -->
    <section class="new-testy mt-4 mb-5">
        <div class="container">
            <h3>New Taste</h3>
            <p class="paragraph">Just arrived in the city: more variance and new flavors</p>
        </div>
        <div class="container-fluid">
            <div class="row taste-food-slider">
                <div class="col-xl-3 my-3 mx-2 slider-item">
                    <div class="card">
                        <img src="{{ asset('assets/img/foods/testy-food1.jpg') }}" class="card-img-top" alt="food-img">
                        <div class="card-body">
                            <a href="{{ route('food.details') }}">
                                <h5 class="card-title">Food Name Here</h5>
                            </a>
                            <p class="paragraph">Some quick example text to build on the card title and make up the bulk of the card'scontent.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 my-3 mx-2 slider-item">
                    <div class="card">
                        <img src="{{ asset('assets/img/foods/testy-food2.png') }}" class="card-img-top" alt="food-img">
                        <div class="card-body">
                            <a href="{{ route('food.details') }}">
                                <h5 class="card-title">Food Name Here</h5>
                            </a>
                            <p class="paragraph">Some quick example text to build on the card title and make up the bulk of the card'scontent.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 my-3 mx-2 slider-item">
                    <div class="card">
                        <img src="{{ asset('assets/img/foods/testy-food3.png') }}" class="card-img-top" alt="food-img">
                        <div class="card-body">
                            <a href="{{ route('food.details') }}">
                                <h5 class="card-title">Food Name Here</h5>
                            </a>
                            <p class="paragraph">Some quick example text to build on the card title and make up the bulk of the card'scontent.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 my-3 mx-2 slider-item">
                    <div class="card">
                        <img src="{{ asset('assets/img/foods/testy-food1.jpg') }}" class="card-img-top" alt="food-img">
                        <div class="card-body">
                            <a href="{{ route('food.details') }}">
                                <h5 class="card-title">Food Name Here</h5>
                            </a>
                            <p class="paragraph">Some quick example text to build on the card title and make up the bulk of the card'scontent.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 my-3 mx-2 slider-item">
                    <div class="card">
                        <img src="{{ asset('assets/img/foods/testy-food4.png') }}" class="card-img-top" alt="food-img">
                        <div class="card-body">
                            <a href="{{ route('food.details') }}">
                                <h5 class="card-title">Food Name Here</h5>
                            </a>
                            <p class="paragraph">Some quick example text to build on the card title and make up the bulk of the card'scontent.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 my-3 mx-2 slider-item">
                    <div class="card">
                        <img src="{{ asset('assets/img/foods/testy-food2.png') }}" class="card-img-top" alt="food-img">
                        <div class="card-body">
                            <a href="{{ route('food.details') }}">
                                <h5 class="card-title">Food Name Here</h5>
                            </a>
                            <p class="paragraph">Some quick example text to build on the card title and make up the bulk of the card'scontent.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEW TASTE SLIDER PART END -->

    <!-- DISTRICT WISE FOOD PART START -->
    <section class="district-food mt-3 mb-5">
        <div class="container">
            <h3>District Wise Foods</h3>
            <p class="paragraph">Find your foods </p>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                    <a href="#">
                        <div class="box d-flex justify-content-between">
                            <div class="text">
                                All Foods for Riyadh, Saudi Arobia
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                    <a href="#">
                        <div class="box d-flex justify-content-between">
                            <div class="text">
                                All Foods for Dhaka, Bangladesh
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                    <a href="#">
                        <div class="box d-flex justify-content-between">
                            <div class="text">
                                All Foods for Sherpur, Mymenshingh
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                    <a href="#">
                        <div class="box d-flex justify-content-between">
                            <div class="text">
                                All Foods for Cumilla, Dhaka
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                    <a href="#">
                        <div class="box d-flex justify-content-between">
                            <div class="text">
                                All Foods for Riyadh, Saudi Arobia
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                    <a href="#">
                        <div class="box d-flex justify-content-between">
                            <div class="text">
                                All Foods for Dhaka, Bangladesh
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- DISTRICT WISE FOOD PART END -->
@endsection