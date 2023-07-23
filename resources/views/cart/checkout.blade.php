@extends('wishlist.index')

{{-- @section('content')
    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="checkbox-form">
                        <h3>buyer Details</h3>
                        <form action="{{ route('orders.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label for="">First Name <span class="required">*</span></label>
                                        <input type="text" name="buyer_first" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" name="buyer_last" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="text" name="email" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" name="buyer_phone" class="form-control">
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="payment_method" id=""
                                        value="paypal">
                                    Paypal
                                </div>

                                <div class="order-button-payment">
                                    <button type="submit" class="btn btn-primary mt-3">place order</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Game</th>
                                        <th class="product-total">Price</th>

                                    </tr>
                                </thead>
                                @php
                                    $cartItems = \Cart::session(auth()->id())->getContent();
                                @endphp

                                @foreach ($cartItems as $item)
                                    <tbody>

                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{ $item->name }}
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">${{ $item->price }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Platform Fee</th>
                                            <td><span class="amount">${{ number_format($item->price * 0.05, 2) }}</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>total</th>
                                            <td><strong><span
                                                        class="amount">${{ number_format($item->price * 1.05, 2) }}</span></strong>
                                            </td>
                                        </tr>

                                    </tfoot>
                                @endforeach

                            </table>
                        </div>


                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="panel-group" id="faq">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="payment-method-link" data-toggle="collapse" aria-expanded="true"
                                                    data-parent="#faq" href="#payment-1" data-value="paypal">Paypal</a>
                                            </h5>
                                        </div>
                                        <div id="payment-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order
                                                    ID as the
                                                    payment reference. Your order won’t be shipped until the funds have
                                                    cleared in
                                                    our account.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection --}}
@section('content')

    <h2>Checkout</h2>

    <div class="mb-3">
        <h3>Buyer Details</h3>
    </div>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Listing Name</label>
            <input type="text" name="listing_name" class="form-control" value="{{ $listing->game_name }}" readonly>
            <label for="">Price</label>
            <input type="text" name="listing_name" class="form-control" value="{{ $listing->price }}" readonly>
        </div>
        <div class="mb-3">

            <label for="" >First Name</label>
            <input type="text" name="buyer_first" id="" class="form-control">

        </div>
        <div class="mb-3">

            <label for="" >Last Name</label>
            <input type="text" name="buyer_last" id="" class="form-control">

        </div>


        <div class="mb-3">

            <label for="" >Mobile Number</label>
            <input type="text" name="buyer_phone" class="form-control">


        </div>
        <input type="hidden" name="listing_id" value="{{ $listing->id }}">
        <h4>Payment Details</h4>

    <div class="form-check">
          <input class="" style="transform:scale(1.2)"  type="radio" name="payment_method" value="gcash"> GCASH
    </div>

    <div class="form-check">
        <input class="form-check-min-height: 2.5em;" style="transform:scale(1.2)" type="radio" name="payment_method" value="paypal"> PAYPAL
  </div>
   <button type="submit"> place order</button>



    </form>
@endsection
