<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\Listings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    protected $guarded = [] ;
    use HasFactory;

    public function listing()
    {
        return $this->belongsTo(Listings::class, 'listing_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subOrders()
    {
        return $this->hasOne(SubOrder::class);
    }
    public function generateSubOrders()
    {
      $listing = $this->listing;

      $shop = $listing->shop;

      $this->subOrders()->create([
        'order_id' => $this->id,
        'seller_id' => $shop->user_id,
        'total_amount' => $this->total_amount
      ]);


    }

    public function markDeclined()
    {
        $this->status = 'declined';
        $this->save();

        $this->subOrders()->update(['status' => 'declined']);
    }

}
