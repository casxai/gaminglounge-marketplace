<?php

namespace App\Http\Controllers\Seller;


use App\Models\SubOrder;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {

        $orders = SubOrder::where('seller_id', auth()->id())->get();

        return view('sellers.orders.index', compact('orders'));

    }

    public function show(SubOrder $order)
    {

        $order->load('order.listing');

        $listing = $order->order->listing;

        return view('sellers.orders.show', compact('listing'));
    }

    public function markCompleted(SubOrder $suborder)
    {
        $suborder->status = 'completed';
        $suborder->save();

        //check if all suborders complete
        $pendingSubOrders = $suborder->order->subOrders()->where('status','!=', 'completed')->count();

        if($pendingSubOrders == 0) {
            $suborder->order()->update(['status'=>'completed']);
        }

        return redirect('/seller/orders')->withMessage('Order Completed');
    }
}
