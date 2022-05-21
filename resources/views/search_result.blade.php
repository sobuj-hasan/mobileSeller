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
                        @forelse ($search_results as $search_result)
                        <div class="col-12 mb-4 mt-2">
                            <div class="search-food">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ $search_result->urlOf('image') }}" alt="food">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>{{ $search_result->name }}</h5>
                                        <h6>{{ $search_result->restaurant->res_name }}</h6>
                                        <p>
                                            {{ Str::limit($search_result->description, 120, $end='..') }}
                                        </p>
                                        <h5>Price : {{ $search_result->price }} SAR</h5>
                                        <div class="star-point d-flex">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="time">
                                                <h6 class="ms-3">0.0 <span>(00 Reviews)</span> </h6>
                                            </div>
                                        </div>
                                        <div class="visit-btn mt-3">
                                            <a href="{{ route('food.details', $search_result->slug) }}">Visit Foods</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h6 class="alert alert-danger text-danger">No results found...</h6>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
