@extends('layouts.seller')


@section('content')


    <div class="container">
            <div class="col-xs-12">
                <h1 class="cart-heading" style="font-size:30px; color:black">Order Summary</h1>
                    <div class="table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Game</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @if($listing)
                                        <tr>
                                            <td class="product-name">{{$listing->game_name}}</td>

                                            <td class="product-name"> {!! $listing->description !!}
                                            </td>

                                            <td class="product-name"><span class="amount">${{$listing->price}}</span></td>
                                        </tr>
                                    @endif

                                </tbody>
                        </table>
                    </div>
            </div>
    </div>

@endsection
