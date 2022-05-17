@extends('dashboard.layouts.app')
@section('title',' Cancel Order')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Cancel Order </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Cancel Order List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Cancel Order</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>Placed Order</th>
                                <th>Order ID.</th>
                                <th>Payment Method </th>
                                <th>Payment</th>
                                <th>Order Status</th>
                                <th>Discount</th>
                                <th>Payable Amount</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($cancel_orders as $order)
                                    <tr>
                                        <th>
                                            {{ $order->created_at->diffForHumans() }}
                                        </th>

                                        <th>
                                            <a href="{{ route('myorder.show', $order->id ) }}">1010{{ $order->id }} <i class="fas fa-caret-up"></i></a>
                                        </th>

                                        <th>
                                            <h5 class="badge badge-warning p-2">{{ $order->payment_method == "3" ? "Cashon Delivery" : "Online Payment" }}</h5>
                                        </th>

                                        <th>
                                            <h5 class="badge badge-danger p-2">{{ $order->payment_status == "1" ? "Due" : "Paid" }}</h5>
                                        </th>

                                        <th>
                                            <h5 class="badge badge-info p-2"> Cancelled </h5>
                                        </th>

                                        <th>
                                            {{ $order->discount }} %
                                        </th>

                                        <th>
                                            {{ $order->total }} SAR
                                        </th>

                                        <td>
                                            <button style="border: none; background:none;" type="submit" class="btn btn-danger"> Already Cancelled </button>
                                        </td>
                                    </tr>
                                    @empty($order)
                                        <div class="alert alert-danger">
                                            Nothing to show any Cancelled order !
                                        </div>
                                    @endempty
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
