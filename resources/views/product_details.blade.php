@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.safetyapp')
@section('title', 'Product Details')
@section('body')
    <!-- Shop Details Part start -->
    <section class="shop-details-part py-3 pb-5">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <p><a href={{ route('index') }}">@lang('home.home')</a> > 
                        <a href="">{{ $singleproduct->category->name }}</a> > 
                        <a href="">{{ $singleproduct->name }}</a> </p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-5 text-center">
                    <div class="img-bg">
                        <img src="{{ asset('safety_assets/img/products') }}/{{ $singleproduct->image }}" alt="Product image">
                    </div>
                </div>
                <div class="col-md-7 ps-3">
                    <div class="content mt-4 mt-md-0">
                        <h3>{{ $singleproduct->name }}</h3>
                        <p>{{ Str::limit($singleproduct->short_description, 340, $end='..') }}</p>
                        <h3 class="d-inline-block">{{ $singleproduct->sell_price }} @lang('home.currency')</h3>
                        <h5 class="d-inline-block ps-3">{{ $singleproduct->price }} @lang('home.currency')</h5> <br>
                        
                        <div class="quantity d-inline-block mt-3">
                            <div class="input-group">
                                <input type="number" name="quantity" id="quantity" value="01">
                                <div class="arrows">
                                    <div class="up-arrow" onclick="increaseValue()">
                                        <img src="{{ asset('safety_assets/img/icon/up-arrow.png') }}" alt="icon">
                                    </div>
                                    <div class="line"></div>
                                    <div class="down-arrow" onclick="decreaseValue()">
                                        <img src="{{ asset('safety_assets/img/icon/down-arrow.png') }}" alt="icon">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="buttons ps-sm-2 d-inline-block">
                            <form id="save_later_form" method="POST" action="{{ route('savelater.store') }}">
                                @csrf
                                <button class="custom-btn mt-3" id="detail_product_id" data-id={{ $singleproduct->id }}>Add to Cart</button>
                                <input type="hidden" name="product_id" value="{{ $singleproduct->id }}">
                                <button type="submit" class="custom-outline-btn mt-3 ms-sm-2">Save to love</button>
                            </form>
                        </div>
                        <p class="mb-0 mt-4"><strong class="text-dark">Tags : </strong> {{ $singleproduct->category->name }}, {{ $singleproduct->name }}</p>
                        <ul class="social-share">
                            <li class="m-0 mt-1 pe-2">
                                <strong>Share Product: </strong>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix py-5">
                <div class="col-12">


                    <div class="tabs-nav">
                        <ul>
                            <li class="active"><a href="#tab1">Description</a></li>
                            <li><a href="#tab2">Information</a></li>
                            {{-- <li><a href="#tab3">Reviews</a></li> --}}
                        </ul>
                    </div>
                    
                    <div class="tabs-content">
                        <div id="tab1" class="single-tab-content">
                            {!! $singleproduct->long_description  !!}
                        </div>
                        <div id="tab2" class="single-tab-content">
                            <p>{{ $singleproduct->short_description  }}</p><br>

                            {!! $singleproduct->long_description !!}
                        </div>
                        {{-- <div id="tab3" class="single-tab-content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majorielievable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Part end -->

    <!-- Related Product Part start -->
    <section class="shop-part py-5">
        <div class="container">
            <div class="row mb-3 mt-5">
                <div class="col-6">
                    <h3 class="section-heading">Related Products</h3>
                </div>
                <div class="col-6 text-end pe-4">
                    <button class="arrow-btn related-prv"><span><</span></button>
                    <button class="arrow-btn related-nxt"><span>></span></button>
                </div>
            </div>

            <div class="autoplay-2">
                @forelse ($related_products as $product)
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
                    @empty
                        <div class="text-info">Nothing to show any Products..</div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Related Product Part end -->

    <!-- Best selling Items start -->
    <section class="shop-part py-5">
        <div class="container">
            <div class="row mb-3 mt-5">
                <div class="col-6">
                    <h3 class="section-heading">Best Saling Items</h3>
                </div>
                <div class="col-6 text-end pe-4">
                    <button class="arrow-btn prv"><span><</span></button>
                    <button class="arrow-btn nxt"><span>></span></button>
                </div>
            </div>

            <div class="autoplay">
                @forelse ($bestsell_products as $product)
                    <div class="slider-item">
                        <div class="image-design">
                            <div class="product-img image">
                                <img class="w-100" height="245" src="{{ asset('safety_assets/img/products') }}/{{ $product->image }}" alt="Product image">
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
                    @empty
                        <div class="text-danger">Nothing to show any products..</div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Best selling Items Part end -->

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
    <script>
        function increaseValue() {
            var value = $('#quantity').val();
            console.log(value)
            value = isNaN(value) ? 0 : value;
            if(value >= 10)
                return false
            value++;
            $('#quantity').val(value)
        }

        function decreaseValue() {
            var value = $('#quantity').val();
            value = isNaN(value) ? 0 : value;
            if(value <= 1)
                return false
            value--;
            $('#quantity').val(value)
        }

        // ==========================
        // Product autoplay slider 
        // ==========================
        $('.autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 3,
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

        $('.autoplay-2').slick({
            slidesToShow: 4,
            slidesToScroll: 3,
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
            nextArrow: $('.related-nxt'),
            prevArrow: $('.related-prv'),
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


