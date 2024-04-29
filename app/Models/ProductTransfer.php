<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTransfer extends Model
{
    protected $table = "product_transfers";
    protected $dates = ['date'];
    protected $fillable= ['from_warehouse_id','to_warehouse_id','qty','product_id','user_id','description','date'];

    public function from_warehouse(){
        return $this->belongsTo(Warehouse::class);
    }

    public function to_warehouse(){
        return $this->belongsTo(Warehouse::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
