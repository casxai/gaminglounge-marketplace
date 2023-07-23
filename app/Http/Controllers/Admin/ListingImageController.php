<?php

namespace App\Http\Controllers\Admin;

use App\Models\ListingImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ListingImageController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // handle image upload and save
        // $image = $request->file('image');
        // $path = $image->store('public/listings');

        // $listingImage = ListingImage::create([
        //   'filename' => $path
        // ]);

        // return $listingImage;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListingImage $image)
    {
        // Storage::delete($image->filename);
        // $image->delete();
        // return response('Image deleted');
    }
}
