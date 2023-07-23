<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Listings;
use App\Models\SubOrder;
use App\Jobs\MonitorOrder;
use App\Http\Requests\StoreOrderRequest;


class OrderController extends Controller
{

    public function store(StoreOrderRequest $request)
    {

        $request->validate([
            'buyer_first' => 'required',
            'buyer_last' => 'required',
            'buyer_phone' => 'required',
            'listing_id' => 'required',

        ]);

        $order = new Order();

        $order->order_number = uniqid('OrderNumber:');
        $order->buyer_first = $request->input('buyer_first');
        $order->buyer_last = $request->input('buyer_last');
        $order->buyer_phone = $request->input('buyer_phone');

        $listingId = $request->input('listing_id');
        $listing = Listings::findOrFail($listingId);

        $order->total_amount = $listing->price;


        $order->user_id = auth()->id();
        $order->listing_id = $listing->id;

        $order->save();

        $order->generateSubOrders();

        //payment
        if (request('payment_method') == 'paypal') {

            MonitorOrder::dispatch($order)->delay(now()->addMinutes(5));

            return redirect()->route('paypal.checkout', ['listing' => $order->listing_id]);
        }

        return redirect()->route('home')->withMessage('Order has been placed');
    }
    public function checkout(Listings $listing)
    {
        return view('cart.checkout', compact('listing'));
    }

    // public function index()
    // {

    //     $suborders = SubOrder::with('order')->get();

    //     return view('orders.index', compact('suborders'));

    // }




}
