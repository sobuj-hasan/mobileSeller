<table class="table table-responsive">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Image</th>
            <th>Product name</th>
            <th>Quantity</th>
            <th>Sub Total</th>
            <th>Total Amount</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach(Cart::content() as $cartproduct)
            <tr class="hide-11">
                <td>{{ $loop->index + 1 }}</td>
                <td>
                    <img width="50" src="{{ asset('safety_assets/img/products/img.png') }}" alt="img">
                </td>
                <td>{{ $cartproduct->name }}</td>
                <td>
                    <div class="value-button" id="decrease" onclick="decreaseValue(0, 50.00, 5.00)"
                        value="Decrease Value">-</div>
                    <input type="number" id="quantity" class="quantity-0" value="1">
                    <div class="value-button" id="increase" onclick="increaseValue(0, 50.00, 5.00)"
                        value="Increase Value">+</div>
                </td>
                <td>{{ $cartproduct->price }} SAR</td>
                {{-- <td>$<span id="total-0">45.00</span></td> --}}
                <td>SAR<span id="total_discount-0"> {{ $cartproduct->price }}</span></td>
                <td>
                    <button type="button" onclick="deleteCartProduct(11)"
                        class="btn btn-danger btn-sm"><i class="fa fa-window-close"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>