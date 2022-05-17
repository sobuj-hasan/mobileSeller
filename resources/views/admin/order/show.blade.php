@extends('admin.layouts.app')
@section('title',' Order list')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Order Details</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Order Details</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="clearfix">
                        <div class="pull-left">
                            <img src="assets/images/logo_dark.png" alt="" height="30">
                        </div>
                        <div class="pull-right">
                            <h3 class="m-0 hidden-print">Invoice</h3>
                        </div>
                    </div>

                    <div class="row m-t-30">
                        <div class="col-6">
                            <h4>Billing Address</h4>
                            <h6 class="line-h-34">{{ $order->billing->name }} </h6>
                            <h6 class="line-h-34">{{ $order->billing->email }} </h6>
                            <h6 class="line-h-34">Country : {{ $order->billing->country }} </h6>
                            <h6 class="line-h-34">City : {{ $order->billing->city }} </h6>
                            <h6 class="line-h-34">Code : {{ $order->billing->zip_code }} </h6>
                            <h6 class="line-h-34">{{ $order->billing->address }} </h6>
                            <h6 class="line-h-34">Phone : {{ $order->billing->phone }} </h6>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h4 style="margin-top: 20px" class="m-t-0 header-title pb-3 mt-4"><b>Order Information</b></h4>
                            <div class="table-responsive">
                                <table class="table m-0 table-actions-bar">
                                    {{ $order->payment }}
                                    <tr>
                                        <th>Order ID</th>
                                        <th>1010{{ $order->id }}</th>
                                    </tr>
                                    <tr>
                                        <th>Subtotal Price</th>
                                        <th>{{ $order->subtotal }} SAR</th>
                                    </tr>
                                    <tr>
                                        <th>Total Price</th>
                                        <th>{{ $order->total }} SAR</th>
                                    </tr>
                                    <tr>
                                        <th>Discount</th>
                                        <th>{{ $order->discount }} %</th>
                                    </tr>
                                    <tr>
                                        <th>Payable Amount</th>
                                        <th>{{ $order->total }} SAR</th>
                                    </tr>
                                    <tr>
                                        <th>Payment Method</th>
                                        <th>
                                            <h5 class="badge badge-warning p-1">{{ $order->payment_method == "3" ? "Cashon delivery" : "Online Payment" }}</h5>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Payment Status</th>
                                        <th>
                                            <h5 class="badge badge-danger p-1">{{ $order->status == "1" ? "Due" : "another way" }}</h5>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Order Date</th>
                                        <th>{{ $order->created_at->format('d M Y') }}</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            {{-- left side --}}
                        </div>
                        <div class="col-6">
                            <div class="float-right">
                                <p><b>Sub-total:</b> {{ $order->subtotal }} SAR</p>
                                <p><b>VAT :</b> {{ $order->vat }} SAR</p>
                                <h3>{{ $order->total }} SAR</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Order Details</b></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Unit Price </th>
                                <th>Qty </th>
                                <th>Total Price </th>
                            </tr>
                            </thead>
                            <tbody>
 

                            @foreach ($order->order_details as $order_detail)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <th>
                                        <img width="60px" src="{{ asset('safety_assets/img/products') }}/{{ $order_detail->product->image }}" alt="img" title="contact-img"/>
                                    </th>
                                    <th>
                                        <h5>{{ $order_detail->product->name }}</h5>
                                    </th>
                                    <th>
                                        <h5>{{ $order_detail->unit_price }}</h5>
                                    </th>
                                    <th>
                                        <h5>{{ $order_detail->qty }}</h5>
                                    </th>
                                    <th>
                                        <h5>{{ $order_detail->total_price }}</h5>
                                    </th>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


