@extends('dashboard.layouts.app')
@section('title','Savelater Products')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Savelater Products </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Savelater Products</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Savelater Product </b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Add Wishes</th>
                                <th>Image </th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Buy Now</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($savelater_products as $savelater_product)
                                    <tr>
                                        <th>
                                            {{ $loop->index + 1 }}
                                        </th>

                                        <th>
                                            {{ $savelater_product->created_at->diffForHumans() }}
                                        </th>

                                        <th>
                                            <img width="60px" src="{{ asset('safety_assets/img/products/') }}/{{ $savelater_product->product->image }}" alt="not found">
                                        </th>

                                        <th>
                                            {{ $savelater_product->product->name }} Name
                                        </th>

                                        <th>
                                            {{ $savelater_product->product->sell_price }} SAR
                                        </th>

                                        <th>
                                            <a href="{{ route('product.details', $savelater_product->product->slug) }}" class="btn btn-info">Buy Now</a>
                                        </th>
                                        <form method="POST" action="{{ route('savelater.destroy', $savelater_product->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <button onclick="WishlistDelete()" style="border: none; background:none; cursor:pointer;" type="submit" class="btn btn-danger"> Delete </button>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty($savelater_product)
                                        <div class="alert alert-danger">
                                            Nothing to show any savelater products !
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
        function WishlistDelete(){
            alert('Are you shure ? You want to delete this savelater product !')
        }
    </script>
@endsection
