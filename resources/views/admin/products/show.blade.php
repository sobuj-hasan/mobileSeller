@extends('admin.layouts.app')
@section('title', $product->name)
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">All Products</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">{{ $product->name }}</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>{{ $product->name }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Name</th>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $product->category->name }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{ $product->price }} SAR</td>
                            </tr>
                            <tr>
                                <th>Available Stock</th>
                                <td>{{ $product->stock }}</td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>{{ $product->description }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img width="100" src="{{ $product->urlOf('image') }}" alt=""></td>
                            </tr>
                            <tr>
                                <th>Multiple Image</th>
                                <td>
                                    @foreach ($multiple_image as $image)
                                        <img width="100" src="{{ $image->urlOf('image_name') }}" alt="">&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endforeach
                                </td>
                            </tr>
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
            alert('Are you shure ? You want to delete this Category')
        }
    </script>
@endsection
