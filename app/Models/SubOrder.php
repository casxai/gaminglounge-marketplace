<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubOrder extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'seller_id', 'total_amount' ];

    public function order()
    {
    return $this->belongsTo(Order::class);
    }

    public function transactions()
    {
        return $this->hasOne(Transaction::class);
    }

}
