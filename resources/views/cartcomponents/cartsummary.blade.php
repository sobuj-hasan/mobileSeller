<div class="card">
    <div class="card-body">
        <h6>Pricing</h6>
        <hr>
        <div class="row d-flex flex-wrap justify-content-between">
            <div class="col">
                <p class="float-start d-inline-block">Sub Total (SAR)</p>
            </div>
            <div class="col">
                <p class="float-end d-inline-block">{{ Cart::subtotal() }}</p>
            </div>
        </div>
        <div class="row d-flex flex-wrap justify-content-between">
            <div class="col">
                <p class="float-start d-inline-block">VAT (SAR)</p>
            </div>
            <div class="col">
                <p class="float-end d-inline-block">{{ Cart::tax() }}</p>
            </div>
        </div>
        <hr>
        <div class="row d-flex flex-wrap justify-content-between">
            <div class="col">
                <p class="float-start d-inline-block">Payable Amount (SAR)</p>
            </div>
            <div class="col">
                <p class="float-end d-inline-block">{{ Cart::total() }}</p>
            </div>
        </div>
    </div>
</div>



