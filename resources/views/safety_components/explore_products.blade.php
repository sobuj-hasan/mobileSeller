@foreach ($explore_products as $product)
    <div class="col-sm-6 col-md-3 text-center">
        <div class="content">
            <div class="image-design">
                <div class="image">
                    <img class="w-100" height="260px" src="{{ asset('safety_assets/img/products') }}/{{ $product->image }}" alt="Product image">
                </div>
                <div class="image-overlay">
                    <form method="POST" action="{{ route('wishlist.store') }}">
                        @csrf
                        <div class="buttons">
                            <button class="me-2 product_id" data-id={{  $product->id }}>
                                <img src="{{ asset('safety_assets/img/icon/cart.png') }}" alt="cart">
                            </button>

                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit"><img src="{{ asset('safety_assets/img/icon/favourite.png') }}" alt="favourite"></button>
                        </div>
                    </form>
                </div>
            </div>
            <a href="{{ route('product.details', $product->slug) }}"><h4>{{ $product->name }}</h4></a>
            <h5>{{ $product->sell_price }} @lang('home.currency')</h5>                     
        </div>
    </div>
@endforeach
@empty($product)
    <span class="text-danger">Nothing to show Explore products..</span>
@endempty