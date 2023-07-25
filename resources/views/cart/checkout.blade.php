@extends('wishlist.index')

{{-- @section('content')

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
@endsection --}}
@section('content')
        <!-- checkout-area start -->
        <div class="checkout-area pb-70">
            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="your-order">
                                            <h3>Please fill out this form</h3>

                                            <form action="{{ route('orders.store') }}" method="POST">
                                                @csrf
                                                    <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="checkout-form-list">
                                                            <label for="">First Name <span class="required">*</span></label>
                                                            <input type="text" name="buyer_first" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="checkout-form-list">
                                                            <label  for="">Last Name <span class="required">*</span></label>
                                                            <input type="text" name="buyer_last" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="checkout-form-list">
                                                            <label for="">Phone  <span class="required">*</span></label>
                                                            <input type="text" name="buyer_phone" class="form-control">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="listing_id" value="{{ $listing->id }}">
                                                    <div class="col-md-6">
                                                            <label for="">Payment Method <span class="required" style="color:red;">*</span></label>
                                                            <div class="checkout-form-list payment-methods" style="display: flex;
                                                            gap: 10px;justify-content: center; align-items: center;
                                                            ">
                                                                <div class="form-check">
                                                                    <input type="radio" name="payment_method" value="gcash">GCash
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" name="payment_method" value="paypal">Paypal
                                                                </div>
                                                            </div>
                                                    </div>

                                                        <input type="submit" value="Place order" />
                                                    <
                                            </form>

                                                <div class="panel-group" id="faq">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2"></a>
                                                        </div>
                                                        <div id="payment-2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>Exciting news! Our GCash payment method will soon be available. Stay tuned for seamless and secure transactions!"</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-group" id="faq">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3"></a></h5>
                                                        </div>
                                                        <div id="payment-3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="your-order">
                                                        <h3>Order Details</h3>
                                                        <div class="your-order-table">
                                                            <table>
                                                                <thead>
                                                                    <tr class="order-total pt-50">
                                                                        <th>Game</th>
                                                                        <th>Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="order-total">
                                                                        <th>
                                                                            {{ $listing->game_name }}
                                                                        </th>
                                                                        <th class="order-total">
                                                                            <span class="amount">${{ number_format(($listing->price) - ($listing->price * 0.05), 2) }}
                                                                            </span>
                                                                        </th>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr class="cart-total">
                                                                        <td>Platform fee</td>
                                                                        <td><span class="amount">$ {{ number_format($listing->price * 0.05, 2) }}</span></td>
                                                                    </tr>
                                                                    <tr class="order-total">
                                                                        <th>Order Total</th>
                                                                        <td><span class="amount">$ {{ number_format(($listing->price) - ($listing->price * 0.05) + ($listing->price * 0.05), 2)}}</span>
                                                                        </td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                </div>
            </div>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // When the GCash radio button is clicked
            $("input[name='payment_method'][value='gcash']").on("click", function () {
                // Toggle the visibility of the GCASH panel body
                $("#payment-2").collapse("toggle");
                $("#payment-3").collapse("hide");
            });
        });

            // When the PayPal radio button is clicked
            $("input[name='payment_method'][value='paypal']").on("click", function () {
                // Toggle the visibility of the GCASH panel body
                $("#payment-3").collapse("toggle");
                $("#payment-2").collapse("hide");
            });

    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>




    @if(Session::has('success'))
    <script>swal("Payment Successful", "{!! Session::get('success') !!}","success",{
        button: "Okay"
    });</script>
    @endif

@endsection
