<?php

namespace App\Models;

use TCG\Voyager\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listings extends Model
{
    use HasFactory;
    protected $fillable = ['game_name','description','price','images'];

    public function order()
    {
        return $this->hasOne(Order::class, 'listing_id');
    }

    public function shop()
    {

        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'listing_categories');
    }



}
