@extends('dashboard.layouts.app')
@section('title', Auth::user()->name)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">{{ Auth::user()->name }}</h4>
                    <span class="btn btn-sm btn-primary ml-5">
                        <a class="text-white" href="{{ route('index') }}"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back Website</a>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">

            <div class="col-lg-3 col-md-6 text-center">
                <div style="box-shadow: 2px 2px 12px #e2e2e2;" class="card-box">
                    <h5 class="m-0 text-uppercase font-bold font-secondary text-overflow">Total Orders</h5>
                    <h3 class="font-600 mt-4">{{ $orders }}</h3>
                </div>
            </div><!-- end col -->

            <div class="col-lg-3 col-md-6 text-center">
                <div style="box-shadow: 2px 2px 12px #e2e2e2;" class="card-box">
                    <h5 class="m-0 text-uppercase font-bold font-secondary text-overflow">Cancelled Orders</h5>
                    <h3 class="font-600 mt-4">{{ $cancel_orders }}</h3>
                </div>
            </div><!-- end col -->

            <div class="col-lg-3 col-md-6 text-center">
                <div style="box-shadow: 2px 2px 12px #e2e2e2;" class="card-box">
                    <h5 class="m-0 text-uppercase font-bold font-secondary text-overflow">Wishlist Products</h5>
                    <h3 class="font-600 mt-4">{{ $wishlists }}</h3>
                </div>
            </div><!-- end col -->

            <div class="col-lg-3 col-md-6 text-center">
                <div style="box-shadow: 2px 2px 12px #e2e2e2;" class="card-box">
                    <h5 class="m-0 text-uppercase font-bold font-secondary text-overflow">SaveLater Products</h5>
                    <h3 class="font-600 mt-4">{{ $saveproducts }}</h3>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
