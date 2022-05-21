@extends('layouts.safetyapp')
@section('title', 'Food Details')
@section('body')
    <!-- RESTAURANT DETAILS PART START -->
    <section class="food-details-banner py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="col-12 mt-4">
                        <div class="details-banner">
                            <img src="{{ asset('assets/img/foods') }}/{{ $single_food->image }}" alt="details-banner">
                        </div>
                    </div>
                    <div class="multiple-img">
                        <div class="row my-2 image-slider">
                            @foreach ($multipleimage as $images)
                                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4">
                                    <img src="{{ asset('assets/img/foods') }}/{{ $images->image_name }}" alt="img">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="food-description mt-4 ms-4">
                        <h4>{{ $single_food->name }}</h4>
                        <p><span>Category : </span> {{ $single_food->category->name }}</p>
                        <p><span>Restaurant : </span> {{ $single_food->restaurant->res_name }}</p>
                        <p>
                            {{ Str::limit($single_food->description, 500, $end='...') }}
                        </p>
                        <div class="content mt-4 mt-md-0">
                            <div class="quantity d-inline-block mt-3">
                                <h6>Quantity</h6>
                                <div class="input-group">
                                    <input type="number" name="quantity" id="quantity" value="01">
                                    <div class="arrows">
                                        <div class="up-arrow" onclick="increaseValue()">
                                            <img src="https://demo.safincu.com/safety_assets/img/icon/up-arrow.png" alt="icon">
                                        </div>
                                        <div class="line"></div>
                                        <div class="down-arrow" onclick="decreaseValue()">
                                            <img src="https://demo.safincu.com/safety_assets/img/icon/down-arrow.png" alt="icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="buttons ps-sm-2 d-inline-block">
                                <form id="save_later_form" method="POST" action="#">
                                    <button class="add-cart-btn mt-3" id="detail_product_id" data-id="8">Add to Cart</button>

                                    <button type="submit" class="add-cart-btn mt-3 ms-sm-2">Save to love</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <script>
                        function increaseValue() {
                            var value = $('#quantity').val();
                            console.log(value)
                            value = isNaN(value) ? 0 : value;
                            if (value >= 10)
                                return false
                            value++;
                            $('#quantity').val(value)
                        }

                        function decreaseValue() {
                            var value = $('#quantity').val();
                            value = isNaN(value) ? 0 : value;
                            if (value <= 1)
                                return false
                            value--;
                            $('#quantity').val(value)
                        }
                    </script>
                </div>
            </div>
            <div class="row mt-2 mt-lg-5">
                <h4 class="mb-3">Food Reviews</h4>
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
                        <p class="mt-2">Kepiting sausnya maknyuss banget, bakal sering kesini bareng keluarga atau kalau
                            ada temen/kerabat datang ke Balikpapan
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
                        <p class="mt-2">Kepiting sausnya maknyuss banget, bakal sering kesini bareng keluarga atau kalau
                            ada temen/kerabat datang ke Balikpapan
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
            <h4>You Might Order</h4>
            <div class="row">
                @forelse ($related_products as $related_product)
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                        <div class="card">
                            <a href="{{ route('food.details', $related_product->slug) }}">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/foods') }}/{{ $related_product->image }}" alt="food">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mt-3">{{ $related_product->name }}</h5>
                                        <p>{{ Str::limit($related_product->description, 100, $end='...') }}</p>
                                        <h6>{{ $related_product->price }} SAR</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <h6 class="text-danger mt-4">Nothing to show any related Foods...</h6>
                @endforelse
            </div>
            {{-- <div class="load-more text-center my-5">
                <a href="#">Load More</a>
            </div> --}}
        </div>
    </section>
    <!-- RESTAURANT WISE FOOD PART END -->
@endsection



