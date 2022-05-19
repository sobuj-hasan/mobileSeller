@extends('layouts.safetyapp')
@section('title', 'Search Result')
@section('body')
    <section class="search-result py-5">
        <div class="container mt-4">
            <h4 class="mb-5">Search Result for "Gulai Kepala Kakap"</h4>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <h4>Filters</h4>
                        <hr>
                        <div class="filter">
                            <h6 class="mt-3">Type</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Drinks
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Foods
                                </label>
                            </div>
                        </div>
                        <div class="filter">
                            <h6 class="mt-3">Price</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Low
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Medium
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    High
                                </label>
                            </div>
                        </div>
                        <div class="filter">
                            <h6 class="mt-3">Divission</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Dhaka
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Rangpur
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Chittagong
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Mymenshingh
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Riyadh
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Khulna
                                </label>
                            </div>
                        </div>
                        <div class="search-btn mt-4">
                            <button>Search Food</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-12 mb-4 mt-2">
                            <div class="search-food">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/foods/food1.png') }}" alt="food">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Kepiting Saus Asam Manis</h5>
                                        <h6>Al hera restaurant</h6>
                                        <p>
                                            This is some content from a media component. You can replace this with any content and adjust it as needed.
                                        </p>
                                        <h5>Price : 174 SAR</h5>
                                        <div class="star-point d-flex">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="time">
                                                <h6 class="ms-3">4.7 <span>(114 Reviews)</span> </h6>
                                            </div>
                                        </div>
                                        <div class="visit-btn mt-3">
                                            <a href="{{ route('restaurant.details') }}">Visit Foods</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="search-food">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/foods/food2.png') }}" alt="food">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Kepiting Saus Asam Manis</h5>
                                        <h6>Al hera restaurant</h6>
                                        <p>
                                            This is some content from a media component. You can replace this with any content and adjust it as needed.
                                        </p>
                                        <h5>Price : 174 SAR</h5>
                                        <div class="star-point d-flex">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="time">
                                                <h6 class="ms-3">4.7 <span>(114 Reviews)</span> </h6>
                                            </div>
                                        </div>
                                        <div class="visit-btn mt-3">
                                            <a href="{{ route('restaurant.details') }}">Visit Foods</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="search-food">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/foods/food3.png') }}" alt="food">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Kepiting Saus Asam Manis</h5>
                                        <h6>Al hera restaurant</h6>
                                        <p>
                                            This is some content from a media component. You can replace this with any content and adjust it as needed.
                                        </p>
                                        <h5>Price : 174 SAR</h5>
                                        <div class="star-point d-flex">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="time">
                                                <h6 class="ms-3">4.7 <span>(114 Reviews)</span> </h6>
                                            </div>
                                        </div>
                                        <div class="visit-btn mt-3">
                                            <a href="{{ route('restaurant.details') }}">Visit Foods</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="search-food">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/foods/food4.png') }}" alt="food">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Kepiting Saus Asam Manis</h5>
                                        <h6>Al hera restaurant</h6>
                                        <p>
                                            This is some content from a media component. You can replace this with any content and adjust it as needed.
                                        </p>
                                        <h5>Price : 174 SAR</h5>
                                        <div class="star-point d-flex">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="time">
                                                <h6 class="ms-3">4.7 <span>(114 Reviews)</span> </h6>
                                            </div>
                                        </div>
                                        <div class="visit-btn mt-3">
                                            <a href="{{ route('restaurant.details') }}">Visit Foods</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="search-food">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/foods/food5.png') }}" alt="food">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Kepiting Saus Asam Manis</h5>
                                        <h6>Al hera restaurant</h6>
                                        <p>
                                            This is some content from a media component. You can replace this with any content and adjust it as needed.
                                        </p>
                                        <h5>Price : 174 SAR</h5>
                                        <div class="star-point d-flex">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="time">
                                                <h6 class="ms-3">4.7 <span>(114 Reviews)</span> </h6>
                                            </div>
                                        </div>
                                        <div class="visit-btn mt-3">
                                            <a href="{{ route('restaurant.details') }}">Visit Foods</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="search-food">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/foods/food6.png') }}" alt="food">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Kepiting Saus Asam Manis</h5>
                                        <h6>Al hera restaurant</h6>
                                        <p>
                                            This is some content from a media component. You can replace this with any content and adjust it as needed.
                                        </p>
                                        <h5>Price : 174 SAR</h5>
                                        <div class="star-point d-flex">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="time">
                                                <h6 class="ms-3">4.7 <span>(114 Reviews)</span> </h6>
                                            </div>
                                        </div>
                                        <div class="visit-btn mt-3">
                                            <a href="{{ route('restaurant.details') }}">Visit Foods</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
