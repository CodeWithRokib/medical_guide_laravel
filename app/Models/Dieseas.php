<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dieseas extends Model
{
    protected $fillable = ['name','description'];

    protected $hidden = ['created_at','updated_at'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function dieseasdurations(){
        return $this->hasMany(DurationVaccine::class);
    }

}
