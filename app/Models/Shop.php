<?php

namespace App\Models;

use App\Models\Listings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;

    protected $fillable=['name','description'];

    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function listings()
    {
        return $this->hasMany(Listings::class, 'shop_id');
    }


}
