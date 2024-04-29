<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','description','image','from','to','gender','product_type'];

//    public function dieseas(){
//
//    }
    public function purchases()
    {
        return $this->belongsTo(Purchase::class);
    }

    public function durations()
    {
        return $this->hasMany(DurationVaccine::class);
    }

    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }
}
