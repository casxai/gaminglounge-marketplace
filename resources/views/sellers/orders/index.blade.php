@extends('layouts.seller')

@section('content')

        <div class="container">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="cart-heading"  style="font-size:30px; color:black">Orders</h1>

                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th >Order number</th>
                                        <th>Status</th>
                                        <th>Order Summary</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @forelse ($orders as $subOrder)
                                            <tr>

                                                <td class="product-name">{{Str::upper($subOrder->order->order_number)}}</td>

                                                <td class="product-name">{{Str::upper($subOrder->status)}}
                                                    @if($subOrder->status != 'completed')
                                                        <a href="{{route('seller.order.delivered', $subOrder)}}" class="button">Mark as Completed</a>
                                                    @endif
                                                </td>

                                                <td class="product-name">
                                                    <a  href="{{route('seller.orders.show', $subOrder)}}" class="button" role="button">View</a>
                                                </td>

                                            </tr>
                                        @empty

                                        @endforelse

                                    </tbody>
                            </table>
                        </div>
                </div>
            </div>


@endsection
