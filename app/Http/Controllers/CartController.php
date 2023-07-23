<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Listings;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function add(Listings $listing)
    {
        \Cart::session(auth()->id())->add(array(
            'id' => $listing->id,
            'name' => $listing->game_name,
            'price' => $listing->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $listing,

        ));
        return back();
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('cartItems'));
    }
    public function destroy($itemId)
    {
       \Cart::session(auth()->id())->remove($itemId);

        return back();
    }





}
