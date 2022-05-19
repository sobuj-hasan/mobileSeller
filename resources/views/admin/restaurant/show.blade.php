@extends('admin.layouts.app')
@section('title', $single_restaurant->res_name)
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Restaurant Details</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">{{ $single_restaurant->res_name }}</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>{{ $single_restaurant->res_name }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Name</th>
                                <td>{{ $single_restaurant->res_name }}</td>
                            </tr>
                            <tr>
                                <th>Trade License</th>
                                <td>
                                    <h5 class="badge badge-info p-2">{{ $single_restaurant->trade_license }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Joining Date</th>
                                <td>{{ $single_restaurant->created_at->format('d M Y') }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $single_restaurant->country }}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{ $single_restaurant->city }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $single_restaurant->address }}</td>
                            </tr>
                            <tr>
                                <th>Contact Person</th>
                                <td>
                                    <h5>{{ $single_restaurant->user->name }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Contact Phone</th>
                                <td>
                                    <h5>{{ $single_restaurant->user->phone }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Contact Email</th>
                                <td>
                                    <h5>
                                        <a href="mailto:{{ $single_restaurant->user->email }}">{{ $single_restaurant->user->email }}</a>
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Discount </th>
                                <td>
                                    <h5>{{ $single_restaurant->res_discount ?? "0" }} (%) </h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $single_restaurant->description }}</td>
                            </tr>
                            <tr>
                                <th>Thumbnail Image</th>
                                <td><img width="140" src="{{ asset('assets/img/restaurant/'. $single_restaurant->res_image) }}" alt=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
