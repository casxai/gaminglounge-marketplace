<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category as ModelsCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends ModelsCategory
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function listings()
    {
        return $this->belongsToMany(Listings::class, 'listing_categories');
    }

    public function allListings()
    {

            $allListings = collect([]);

            $mainCategoryListings = $this->listings;

            $allListings = $allListings->concat($mainCategoryListings);

            if($this->children->isNotEmpty()) {

                foreach($this->children as $child) {
                    $allListings = $allListings->concat($child->listings);

                }

            }

            return $allListings;



    }
}
