@extends('dashboard.layouts.app')
@section('title',' My Order')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Order </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Order List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Order List</b></h4>

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
                                @foreach ($orders as $order)
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
                                            <h5 class="badge badge-info p-2">{{ $order->status == "1" ? "pending" : "On the way" }}</h5>
                                        </th>

                                        <th>
                                            {{ $order->discount }} %
                                        </th>

                                        <th>
                                            {{ $order->total }} SAR
                                        </th>

                                        <form method="POST" action="{{ route('myorder.destroy', $order->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <button onclick="OrderDelete()" style="border: none; background:none; cursor:pointer;" type="submit" class="btn btn-danger"> Cancel </button>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty($order)
                                        <div class="alert alert-danger">
                                            Nothing to show any Blog post !
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

@section('footer_script')
    <script>
        function OrderDelete(){
            alert('Are you shure ? You want to delete this Order !')
        }
    </script>
@endsection
