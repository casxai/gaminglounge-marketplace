@extends('layouts.front')

@section('content')


    <!-- wishlist areastart -->
    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="cart-heading">Favorites</h1>
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>remove</th>
                                        <th>image</th>
                                        <th>game</th>
                                        <th>Price</th>
                                        <th>platform Fee</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="product-remove"><a href="{{ route('favorite.destroy', $item->id) }}"><i class="pe-7s-close"></i></a></td>


                                        <td class="product-thumbnail">

                                            @php
                                            $images = json_decode($item->associatedModel->images, true);
                                            @endphp

                                            @if (!empty($images[0]))
                                            <a href="{{ route('listings.show', $item->associatedModel) }}">
                                                <img src="{{ asset('storage/' . $images[0]) }}" alt="">
                                            </a>
                                            @endif

                                        </td>

                                        <td class="product-name">
                                        <a href="{{ route('listings.show', $item->associatedModel) }}">
                                            {{$item->name}}
                                        <span>
                                        @php
                                            $descriptionWords = str_word_count(strip_tags($item->associatedModel->description), 1);
                                            $shortDescription = implode(' ', array_slice($descriptionWords, 0, 10));
                                        @endphp
                                            {!! $shortDescription !!}
                                        @if (count($descriptionWords) > 10)...
                                        @endif
                                        </span>
                                        </a>
                                        </td>

                                        {{-- original price --}}
                                        <td class="product-price-cart"><span class="amount">${{number_format($item->price / 1.05, 2)}}</span></td>

                                        {{-- added fee 5% --}}
                                        <td class="product-price-cart"><span class="amount">${{number_format($item->price - ($item->price / 1.05), 2)}}</span></td>

                                        <td class="product-subtotal">$165.00</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                    </div>
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Subtotal<span>100.00</span></li>
                                        <li>Total<span>100.00</span></li>
                                    </ul>
                                    <a href="{{ route('favorite.checkout')}}">Proceed to checkout</a>
                                </div>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
