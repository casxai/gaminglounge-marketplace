<?php

namespace App\Models;

use App\Models\Listings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingImage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function listing()
    {

    }

}
