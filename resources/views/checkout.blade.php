@extends('layouts.safetyapp')
@section('title', 'Checkout')
@section('body')
    <!-- Checkout part start -->
    <section class="cart-page py-5">
        <div class="container cart-bg">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breab text-start text-dark py-3">
                        <a class="text-dark" href="#">Home</a>&nbsp;<span> &gt; </span>&nbsp; <a class="text-dark" href="#">Checkout</a>
                    </div>
                    <h5 class="py-3">Loged in as ({{ Auth::user()->name }})</h5>
                </div>
            </div>
            <form action="{{ route('order.store') }}" method="POST" class="needs-validation" novalidate="">
                @csrf
                <div class="row py-5">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12">
                                <h6>Billing Information</h6>
                                <hr>
                            </div>
    
                            <div class="col-sm-6 py-2">
                                <label for="first_name">Full Name</label>
                                <input type="hidden" name="billing_id" value="@if($countb) {{ $billing->id }} @endif">
                                <input type="text" name="name" value="@if($countb) {{ $billing->name }} @endif" id="first_name" class="form-control" required="">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 py-2">
                                <label for="company_name">Company Name (if any)</label>
                                <input type="text" name="company_name" value="@if($countb) {{ $billing->company_name }} @endif" id="company_name" class="form-control">
                            </div>
    
                            <div class="col-6 py-2">
                                <label for="company_name">Country</label>
                                <input type="text" name="country" value="@if($countb) {{ $billing->country }} @endif" id="country" class="form-control">
                                @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 py-2">
                                <label for="contact">Contact Number</label>
                                <input type="text" name="phone" value="@if($countb) {{ $billing->phone }} @endif" id="contact" class="form-control" required="">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 py-2">
                                <label for="City">City</label>
                                <input type="text" name="city" value="@if($countb) {{ $billing->city }} @endif" id="City" class="form-control">
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 py-2">
                                <label for="zip">Zip code</label>
                                <input type="text" name="zip_code" value="@if($countb) {{ $billing->zip_code }} @endif" id="zip" class="form-control">
                                @error('zip_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <div class="col-12 py-2">
                                <label for="address">House Address</label>
                                <textarea name="address" placeholder="Write your home address  ?" value="@if($countb) {{ $billing->address }} @endif" class="form-control"></textarea>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 py-2">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" value="@if($countb) {{ $billing->email }} @endif" id="email" class="form-control">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 py-2">
                                <label for="note">Note:</label>
                                <textarea name="opinion" placeholder="Type you massage what do you think?" class="form-control" value="@if($countb) {{ $billing->opinion }} @endif"></textarea>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12">
                                <h6>Your Order</h6>
                                <hr>
                            </div>
    
                            {{-- <div class="col-12 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Pricing</h6>
                                        <hr>
                                        <div class="row d-flex flex-wrap justify-content-between">
                                            <div class="col">
                                                <p class="float-start d-inline-block">Total Price($)</p>
                                            </div>
                                            <div class="col">
                                                <p class="float-end d-inline-block">$100</p>
                                                <input type="hidden" name="subtotal_price" value="100">
                                            </div>
                                        </div>
                                        <div class="row d-flex flex-wrap justify-content-between">
                                            <div class="col">
                                                <p class="float-start d-inline-block">Total Discount($)</p>
                                            </div>
                                            <div class="col">
                                                <p class="float-end d-inline-block">$90</p>
                                                <input type="hidden" name="total_discount" value="90">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row d-flex flex-wrap justify-content-between">
                                            <div class="col">
                                                <p class="float-start d-inline-block">Payable Amount($)</p>
                                            </div>
                                            <div class="col">
                                                <p class="float-end d-inline-block">$10</p>
                                                <input type="hidden" name="payable_amount" value="10">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
    
                            <div class="col-12 mt-4">
                                <div class="border p-3 mb-3">
                                    <div class="py-2">
                                        <input type="radio" name="payment_type" value="1" id="bank_trans" required="">
                                        <label for="bank_trans">Bank Transfer</label>
                                    </div>
                                    <p>
                                        Make your payment directly into our bank account. Please use your Order ID as the
                                        payment reference. Your order will not be shipped until the funds have cleared in
                                        our account.
                                    </p>

                                    <div class="py-2">
                                        <input type="radio" name="payment_method" value="2" id="credit_card" required="">
                                        <label for="credit_card">Cradit Card</label>
                                    </div>
                                    <p>
                                        Make your payment directly into our bank account. Please use your Order ID as the
                                        payment reference. Your order will not be shipped until the funds have cleared in
                                        our account.
                                    </p>
                                    <div class="py-2">
                                        <input type="radio" name="payment_method" value="3" id="cash_delivery" checked="checked" required="">
                                        <label for="cash_delivery">Cash on Delivery</label>
                                    </div>
                                </div>
    
                                <div>
                                    <input type="checkbox" id="trams-condition" required="" checked="checked" name="terms_condition">
                                    <label for="trams-condition" class="bank-trans-label">I agree with all term &amp; and Condition.</label>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button style="width: 100%; background: #4a148c; border: none; color: #ffff; padding:10px;" class="large-btn" type="submit"> Place Order </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout part end -->
@endsection


