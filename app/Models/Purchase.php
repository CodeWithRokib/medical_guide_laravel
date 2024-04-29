<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['name','details','price','image','warehouse_id','user_id','bonus','product_type','custom_date'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function dieseas(){
        return $this->belongsTo(Dieseas::class);
    }

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
