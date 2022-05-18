@extends('layouts.safetyapp')
@section('title', 'Restaurant Details')
@section('body')
    <!-- RESTAURANT DETAILS PART START -->
    <section class="food-details-banner py-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="details-banner">
                        <h3 class="mb-3">Restaurant Name</h3>
                        <img src="{{ asset('assets/img/photos/details-banner1.png') }}" alt="details-banner">
                    </div>
                    <div class="starting">
                        <h5 class="mt-3"><span>Open</span> (Mon - Sat, 09:00 - 21:00)</h5>
                        <p>Riyadh, Saudi Arobia</p>
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
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-2">
                    <div class="review-card">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/img/users/user2.png') }}" alt="user-photo">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Yoko Bos</h6>
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
                                <img src="{{ asset('assets/img/users/user1.png') }}" alt="user-photo">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Rudy Galih</h6>
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
                                <img src="{{ asset('assets/img/users/user1.png') }}" alt="user-photo">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Raka Prasetyo</h6>
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
                                <img src="{{ asset('assets/img/users/user1.png') }}" alt="user-photo">
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
            </div>
        </div>
    </section>
    <!-- RESTAURANT DETAILS PART END -->

    <!-- RESTAURANT WISE FOOD PART START -->
    <section class="resturant-foods py-4">
        <div class="container">
            <h4>Restaurant Foods Menu</h4>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/foods/food1.png') }}" alt="food">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-3">Kepiting Saus Asam Manis</h5>
                                    <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                                    <h6>SAR 74.00</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/foods/food2.png') }}" alt="food">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-3">Gulai Kepala Kakap Name</h5>
                                    <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                                    <h6>SAR 74.00</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/foods/food3.png') }}" alt="food">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-3">Kepiting Saus Asam Manis</h5>
                                    <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                                    <h6>SAR 74.00</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/foods/food4.png') }}" alt="food">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-3">Gulai Kepala Kakap Name</h5>
                                    <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                                    <h6>SAR 74.00</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/foods/food5.png') }}" alt="food">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-3">Kepiting Saus Asam Manis</h5>
                                    <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                                    <h6>SAR 74.00</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/foods/food6.png') }}" alt="food">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-3">Gulai Kepala Kakap Name</h5>
                                    <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                                    <h6>SAR 74.00</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/foods/food7.png') }}" alt="food">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-3">Udang Tiger Bumbu Balado</h5>
                                    <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                                    <h6>SAR 74.00</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/foods/food8.png') }}" alt="food">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-3">Kepiting Saus Asam Manis</h5>
                                    <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                                    <h6>SAR 74.00</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/foods/food9.png') }}" alt="food">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-3">Udang Tiger Bumbu Balado</h5>
                                    <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                                    <h6>SAR 74.00</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="load-more text-center my-5">
                <a href="#">Load More</a>
            </div>
        </div>
    </section>
    <!-- RESTAURANT WISE FOOD PART END -->
@endsection

