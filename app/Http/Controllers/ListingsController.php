<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listings;
use Illuminate\Http\Request;
use App\Http\Requests\StoreListingsRequest;
use App\Http\Requests\UpdateListingsRequest;

class ListingsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        $categoryName = null;

        if($categoryId){
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);

            $listings = $category->allListings();
        }else{
            $listings = Listings::take(10)->get();
        }

        return view('listings.index', compact('listings', 'categoryName'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $listings = Listings::where('game_name','LIKE',"%$query%")->paginate(10);

        // dd($listings);

        return view('listings.catalog',compact('listings'));
    }

    public function show(Listings $listing)
    {
         // Get the related products based on categories
         $relatedProducts = Listings::whereHas('categories', function ($query) use ($listing) {
            $query->whereIn('categories.id', $listing->categories->pluck('id'));
        })
        ->where('id', '!=', $listing->id)
        ->take(4) // Limit the number of related products to display
        ->get();
        return view('listings.show', compact('listing', 'relatedProducts'));

    }



}
