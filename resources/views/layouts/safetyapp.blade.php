@php
    $locale = app()->getLocale();
@endphp
<!DOCTYPE html>
@if ($locale == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="auto">
@endif
<!-- <html lang="ar" dir="rtl"> -->
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | Mobile Seller</title>
    <!--    GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!--    BOOSTRAP-->
    @if ($locale == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif
    <!--    FONT AWSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--    SLICK SLIDER-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!--    MAIN CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @if ($locale == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/arabic.css') }}">
    @endif
</head>
<body>
    <!--    HEADER SECTION-->
    <header class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-3">
                    <div class="logo d-flex justify-content-between align-items-center">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                        </a>
                        <i class="fa fa-bars d-md-none" onClick="mobileClick()" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <div class="menubar d-flex justify-content-center">
                        <div class="input-group custom-group">
                            <input type="text" class="custom-form" placeholder="Specify your taste"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                    <div class="menubar d-flex justify-content-between align-items-center">
                        <ul>
                            <li>
                                <a href="{{ route('index') }}">Home </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>

                            <li class="mx-1">
                                <a href="{{ route('login') }}" class="login-menu">Log In</a>
                            </li>
                            <li class="mx-1">
                                <a href="{{ route('register') }}" class="login-menu">Create Account</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END -->
    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="mobile-menu">
        <!-- accordion-->
        <div class="accordion accordion-flush" id="accordionFlushExample">
    
            <div class="mobile-logo mb-5">
                <a href="#">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="mobile-logo">
                </a>
                <i id="mobile-cross" class="fa fa-times" onClick="mobileClick()"></i>
            </div>
    
            <div class="accordion-item custom ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            Home
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            About
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#two" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Services
                    </button>
                </h2>
                <div id="two" class="accordion-collapse collapse" aria-labelledby="two"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-right"></i>services</a></li>
    
                            <li><a href="#"><i class="fa fa-chevron-right"></i>sector</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    
        </div>
    
    </div>
    <div id="mobileOverlay" class="mobile-overlay" onClick="mobileClick()"></div>
    <!--   END MOBILE MENU-->

    @yield('body')

    <!--    FOOTER SECTION-->
    <footer class="pt-5">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-0">
                    <div class="footer-box">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        </p>
                        <div class="social-media-footer">
                            <h4>Social Media</h4>
                            <div>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-0">
                    <div class="footer-box">
                        <h6>Importent Link</h6>

                        <div class="footer-menu">
                            <a href="#">About Us</a>
                            <a href="#">Our Services</a>
                            <a href="#">Food Order</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms & Condition</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-0">
                    <div class="footer-box">
                        <h6>About Us</h6>
                        <p>
                            Riadah Incubators Startup Studio
                            And corporate factory
                            Khaldiya Towers - 4th Tower
                            Faisal Bin Turki Road - Office No.
                            6 - Floor 13 - Riyadh
                        </p>
                        <ul>
                            <li>

                                Phone: +996 012345678
                            </li>
                            <li>
                                Email: info@mobile-seller.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="copyright">
        <div class="copyright-section">
            <p>@copyright-2021. All rights reserved Mobile Seller incubator ltd</p>
        </div>
    </section>
    <!--    FOOTER SECTION END-->



    <!--    JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--    SLICK SLIDER-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!--    BOOSTRAP-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        $('.taste-food-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            rtl: false,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: true,
            nextArrow: $('#course-next'),
            prevArrow: $('#course-previous'),
            responsive: [{
                breakpoint: 1300,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
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

</body>

</html>










