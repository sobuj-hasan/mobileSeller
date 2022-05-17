@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.safetyapp')
@section('title', 'Shop')
@section('body')
    <!-- Banner part start -->
    <section class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 col-xl-5">
                    <div class="content">
                        <h2>@lang('home.safety_incubator')</h2>
                        <h1>@lang('home.Protect_your_life')</h1>
                        <p>@lang('home.banner_text')</p>
                        <a href="{{ route('login') }}">@lang('home.joinus')</a>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-xl-5 m-auto">
                    <div class="content-img mt-5">
                        <img src="{{ asset('safety_assets/img/photos/banner-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner part end -->

    <!-- Shop Part start -->
    <section class="shop-part py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xl-2">
                    <ul class="category-bg">
                        <li class="top-bg">
                            <span>@lang('home.category')</span>
                        </li>
                        @foreach ($categories as $category)
                            @if ($locale == 'ar')
                                <li>
                                    <a href="{{ route('category.shop', $category->id) }}">{{ $category->ar_name }}</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('category.shop', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9 col-xl-10 mt-5 mt-md-0">
                    <div class="row mb-3">
                        <div class="col-8">
                            <h3 class="section-heading">@lang('home.Top_Sale_Items')</h3>
                        </div>
                        <div class="col-4 text-end pe-4">
                            <button class="arrow-btn shop-top-prv"><span><</span></button>
                            <button class="arrow-btn shop-top-nxt"><span>></span></button>
                        </div>
                    </div>
                    <div class="product-autoplay-1">
                        @foreach ($topsell_products as $product)
                            <div class="slider-item">
                                <div class="image-design">
                                    <div class="product-img image">
                                        <img class="w-100" height="260px" src="{{ asset('safety_assets/img/products') }}/{{ $product->image }}" alt="Product image">
                                    </div>
                                    <div class="image-overlay">
                                        <form method="POST" action="{{ route('wishlist.store') }}">
                                            @csrf
                                            <div class="buttons">
                                                <button class="me-2 product_id" data-id={{  $product->id }}>
                                                    <img src="{{ asset('safety_assets/img/icon/cart.png') }}" alt="cart">
                                                </button>

                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit"><img src="{{ asset('safety_assets/img/icon/favourite.png') }}" alt="favourite"></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <a href="{{ route('product.details', $product->slug) }}">
                                    <h4>{{ $product->name }}</h4>
                                </a>
                                <h5>{{ $product->sell_price }} @lang('home.currency')</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Part end -->

    <!-- New Arrival Part start -->
    <section class="shop-part py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-xl-2">
                    <div class="arrival-photo">
                        <div class="new-arrival-img m-auto">
                            <img src="{{ asset('safety_assets/img/photos/image-1.png') }}" alt="">
                        </div>
                        <div class="new-arrival-img-2 mt-5">
                            <img src="{{ asset('safety_assets/img/photos/image-2.png') }}" alt="">
                        </div>
                        <div class="visit-link">
                            <a href="{{ route('index') }}"> @lang('home.visit_website') </a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-9 col-xl-10 mt-5 mt-md-0">
                    <div class="row mb-3">
                        <div class="col-8">
                            <h3 class="section-heading">@lang('home.new_arrivals')</h3>
                        </div>
                        <div class="col-4 text-end pe-4">
                            <button class="arrow-btn prv"><span>
                                    < </span></button>
                            <button class="arrow-btn nxt"><span> > </span></button>
                        </div>
                    </div>
                    <div class="product-autoplay-2">
                        @foreach ($newarrivals as $product)
                            <div class="slider-item">
                                <div class="image-design">
                                    <div class="product-img image">
                                        <img class="w-100" height="260px" src="{{ asset('safety_assets/img/products') }}/{{ $product->image }}" alt="Product image">
                                    </div>
                                    <div class="image-overlay">
                                        <form method="POST" action="{{ route('wishlist.store') }}">
                                            @csrf
                                            <div class="buttons">
                                                <button class="me-2 product_id" data-id={{  $product->id }}>
                                                    <img src="{{ asset('safety_assets/img/icon/cart.png') }}" alt="cart">
                                                </button>

                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit"><img src="{{ asset('safety_assets/img/icon/favourite.png') }}" alt="favourite"></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <a href="{{ route('product.details', $product->slug) }}">
                                    <h4>{{ $product->name }}</h4>
                                </a>
                                <h5>{{ $product->sell_price }} @lang('home.currency')</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Arrival Part end -->

    <!-- Explore part start -->
    <section class="explore-part py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-8 text-center">
                    <h2>@lang('home.Explore_Safety_Product')</h2>
                </div>
            </div>
    
            <div class="row py-5">
                @include('safety_components.explore_products')
            </div>
        </div>
    </section>
    <!-- Explore part end -->

    <!-- Blog post part start -->
    <section class="blog-post py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-7 text-center">
                    <h2>@lang('home.Latest_Blog_Post')</h2>
                    <div class="small-line mb-4"></div>
                </div>
            </div>
            @include('safety_components.latest_blog')
        </div>
    </section>
    <!-- Blog post part end -->

    <!-- Business brand start -->
    <section class="business-brand py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="mb-0">@lang('home.Our_Business_Brand')</h2>
                    <div class="small-line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="{{ asset('safety_assets/img/partners/1.png') }}" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="{{ asset('safety_assets/img/partners/2.png') }}" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="{{ asset('safety_assets/img/partners/3.png') }}" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="{{ asset('safety_assets/img/partners/4.png') }}" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="{{ asset('safety_assets/img/partners/5.png') }}" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="{{ asset('safety_assets/img/partners/6.png') }}" alt="Partners">
                </div>
            </div>
        </div>
    </section>
    <!-- Business brand end -->
@endsection

@section('footer_script')
    {{-- =============================
    Slider Autoplay Item
    ============================= --}}
    <script>
        $('.product-autoplay-1').slick({
            slidesToShow: 3,
            slidesToScroll: 2,
            rows: 2,
            @if ($locale == 'ar')
                rtl: true,
            @else
                rtl: false,
            @endif
            autoplay: false,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
            nextArrow: $('.shop-top-nxt'),
            prevArrow: $('.shop-top-prv'),
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 350,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]

        });

        $('.product-autoplay-2').slick({
            slidesToShow: 3,
            slidesToScroll: 2,
            rows: 2,
            @if ($locale == 'ar')
                rtl: true,
            @else
                rtl: false,
            @endif
            autoplay: false,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
            nextArrow: $('.nxt'),
            prevArrow: $('.prv'),
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 350,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]

        });
    </script>
@endsection

