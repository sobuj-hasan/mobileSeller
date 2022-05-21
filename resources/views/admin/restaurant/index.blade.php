@extends('admin.layouts.app')
@section('title','Restaurants')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Restaurant List</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Restaurant List</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>Restaurant List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">
                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Image </th>
                                <th>Restaurant Name </th>
                                <th>Created By</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>Discount</th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($restaurants as $restaurant)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>
                                        <td>
                                            <img width="80px" src="{{ $restaurant->urlOf('res_image') }}" alt="img" title="food-img"/>
                                        </td>
                                        <td>
                                            <a href="{{ route('restaurant.show', $restaurant->id) }}">{{ $restaurant->res_name }}</a>
                                        </td>
                                        <td>
                                            {{ $restaurant->user->name }}
                                        </td>
                                        <td>
                                            {{ $restaurant->country }}
                                        </td>
                                        <td>
                                            <h5 class="badge 
                                            @php if ($restaurant->status == 1) {
                                                echo "badge-success p-2";
                                            }else {
                                                echo "badge-danger p-2";
                                            } @endphp
                                            ">
                                                @php
                                                    if ($restaurant->status == 1) {
                                                        echo "active";
                                                    }else {
                                                        echo "pending";
                                                    }
                                                @endphp
                                            </h5>
                                        </td>
                                        <td>
                                            <h5>{{ $restaurant->res_discount ?? "0" }} (%)</h5>
                                        </td>
                                        <form method="POST" action="{{ route('restaurant.destroy', $restaurant->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                @if ($restaurant->status == 1)
                                                    <a href="{{ route('restaurant.edit', $restaurant->id) }}" class="table-action-btn"> <i class="far fa-edit"></i> </a>
                                                @endif
                                                <button onclick="productDelete()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                                {{-- @empty($restaurant)
                                    <span class="text-danger">Nothing to show Restaurant...</span>
                                @endempty --}}
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
        function productDelete(){
            alert('Are you shure ? You want to delete this Restaurant')
        }
    </script>
@endsection
