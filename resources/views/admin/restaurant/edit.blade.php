@extends('admin.layouts.app')
@section('title','Restaurant Edit')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Edit Restaurant</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Edit Restaurant</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row mt-4">
            <div class="col-md-12 m-auto">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Edit Restaurant</h4>
                    <form method="POST" action="{{ route('restaurant.update', $single_restaurant->id) }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Restaurant Name : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Restaurant Name" value="{{ $single_restaurant->res_name }}" name="res_name">
                                @error('res_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Trade License : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Trade License" value="{{ $single_restaurant->trade_license }}" name="trade_license">
                                @error('trade_license')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Country : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Country" value="{{ $single_restaurant->country }}" name="country">
                                @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">City : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="City" value="{{ $single_restaurant->city }}" name="city">
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Address : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Address" value="{{ $single_restaurant->address }}" name="address">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Restaurant Discount % : <span class="text-light">(if any)</span></label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="N/A" value="{{ $single_restaurant->res_discount }}" name="res_discount">
                                @error('res_discount')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Description : </label>
                            <div class="col-9">
                                <textarea class="form-control" rows="1" id="field-1" placeholder="Describe Your Restaurant/Business" name="description">{{ $single_restaurant->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Restaurant Thumbnail Image</label>
                            <div class="col-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img width="400" height="150" src="{{ asset('assets/img/restaurant/') }}/{{ $single_restaurant->res_image }}" alt="image" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px; border: 1px solid #dadada;"></div>
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-file mt-2">
                                            <span class="fileupload-new p-3"><i class="fa fa-paper-clip"></i> Change image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="btn-secondary" value="{{ old('res_image') }}" name="res_image"/>
                                            @error('res_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0 row">
                            <div class="offset-3 col-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light"> Submit Now </button>
                            </div>
                        </div>
                    </form>
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
