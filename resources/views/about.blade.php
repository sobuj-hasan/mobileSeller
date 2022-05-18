@extends('layouts.safetyapp')
@section('title', 'About Us')
@section('body')
    <!-- BANNER SECTION START -->
    <section class="aboutus-part py-5">
        <div class="container">
            <h3 class="mt-2">Explore the best</h3>
            <h3 class="">Food in The Mobile Seller</h3>
            <h3 class="">With Us</h3>
            <p class="mt-4">That’s our motto to make this website Real, It all started when our friend outside Balikpapan asked for best culinary experience in Balikpapan but we can’t provide enough information for our friend to taste the best food in Balikpapan.</p>
        </div>
    </section>
    <!-- BANNER SECTION START -->

    <!-- SERVICE SECTION START -->
    <section class="why-us py-5">
        <div class="container">
            <h1 class="text-center mb-lg-5">Why Us ?</h1>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 text-center">
                    <h3 class="my-3">Complete</h3>
                    <img src="{{ asset('assets/img/photos/complete.png') }}" alt="service-img">
                    <p class="my-3 mx-lg-5">We provide a Complete
                        Information about Balikpapan
                        Cuisine
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 text-center">
                    <h3 class="my-3">Wonderful</h3>
                    <img src="{{ asset('assets/img/photos/wonderful.png') }}" alt="service-img">
                    <p class="my-3 mx-lg-5">We provide a Complete
                        Information about Balikpapan
                        Cuisine
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 text-center">
                    <h3 class="my-3">Trusted</h3>
                    <img src="{{ asset('assets/img/photos/trusted.png') }}" alt="service-img">
                    <p class="my-3 mx-lg-5">We provide a Complete
                        Information about Balikpapan
                        Cuisine
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE SECTION START -->

    <!-- OUR TEAM SECTION START -->
    <section class="our-team py-5">
        <div class="container">
            <h1 class="text-center mb-lg-5">Our Tech Team</h1>
            <div class="row justify-content-center">
                <div class="col-xl-4 text-center my-3">
                    <img src="assets/img/photos/team1.png" alt="team-member-img">
                    <h4 class="my-2">Mr. Jhon Abraham</h4>
                    <p class="my-2">UI/UX Designer</p>
                </div>
                <div class="col-xl-4 text-center my-3">
                    <img src="assets/img/photos/team2.png" alt="team-member-img">
                    <h4 class="my-2">Mr. Sakib Al Hasan</h4>
                    <p class="my-2">Front-end Developer</p>
                </div>
                <div class="col-xl-4 text-center my-3">
                    <img src="assets/img/photos/team3.png" alt="team-member-img">
                    <h4 class="my-2">Member Name Here</h4>
                    <p class="my-2">Full-stack Developer</p>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR TEAM SECTION START -->
@endsection