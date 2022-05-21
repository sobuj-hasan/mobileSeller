@extends('layouts.safetyapp')
@section('title', 'Your Cart')
@section('body')
    <!-- Cart page part start -->
    <section class="cart-page py-5">
        <div class="container cart-bg p-4">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breab text-start text-dark py-3">
                        <a class="text-dark" href="{{ route('index') }}">Home</a>&nbsp;<span> &gt; </span>&nbsp; <a class="text-dark" href="{{ route('index') }}"> Shop </a> &nbsp;<span> &gt; </span>&nbsp; </span>&nbsp; <a class="text-dark">Cart</a>
                    </div>
                    <h5 class="py-3">SHOPPING CART INFORMATION</h5>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12">
                    <form action="#" method="post">
                        <div id="cartcontentshow">

                        </div>
                        <div class="text-end mt-5">
                            <button class="custom-btn">Update Cart</button>
                        </div>
    
                        <div class="row justify-content-end pt-4">
                            <div class="col-12 col-sm-5">
                                <div id="cartsummaryshow">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-end mt-4">
                                <a class="custom-btn" href="{{ route('index') }}">More Shop</a>
                                <a class="custom-btn" href="{{ route('checkout') }}">Process to checkout</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart pge part end -->
@endsection
