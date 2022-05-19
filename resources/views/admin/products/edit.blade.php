@extends('admin.layouts.app')
@section('title',' product edit')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Product Edit</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Edit Product</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Product</h4>
                    </div>
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Select Category</label>
                                        <select class="form-control" name="category_id">
                                            <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Select Restaurants</label>
                                        <select class="form-control" name="restaurant_id">
                                            <option value="">Select Restaurant</option>
                                            @foreach ($restaurants as $restaurant)
                                            <option value="{{ $restaurant->id }}">{{ $restaurant->res_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('restaurant_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Name</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="name" name="name" value="{{ $product->name }}" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Price</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="price" name="price" value="{{ $product->price }}" required>
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Stock Amount</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="stock " name="stock" value="{{ $product->stock }}" required>
                                        @error('stock_amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-1" class="control-label">Thumbmail Image</label><br>
                                    <button type="button" class="btn btn-secondary btn-file">
                                        <input type="file" class="btn-secondary" name="image"/>
                                    </button><br>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="field-1" class="control-label">Multiple Images <span class="text-light">&nbsp;(Can select multiple images)</span></label><br>
                                    <button type="button" class="btn btn-secondary btn-file">
                                        <input type="file" class="btn-secondary" multiple name="image_name[]" />
                                    </button><br>
                                    @error('image_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Food Description</label>
                                        <textarea style="height: 200px;" class="form-control" id="field-1" placeholder="Here short description" name="description" required>{{ $product->description }}</textarea>
                                        @error('short_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('products.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" name="submit" class="btn btn-info waves-effect waves-light">Save and Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('footer_script')
    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 150,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
            $('.inline-editor').summernote({
                airMode: true
            });
        });
    </script>
@endsection


