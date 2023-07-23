<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listings;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listings = Listings::with('shop.owner')->take(20)->get();

        $categories = Category::with('children.children')->whereNull('parent_id')->get();


        // dd($categories);

        return view('home',['listings' => $listings, 'categories' => $categories]);
    }

    public function contact()
    {
        return view('contact');
    }


}
