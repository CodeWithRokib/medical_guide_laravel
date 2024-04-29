<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['invoice_id','from_warehouse_id','to_warehouse_id','doctor_id','product_id','patient_id','status','does_no','product_type','price','qty'];
    
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
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
    
    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class,'from_warehouse_id');
    }

    public function doctor()
    {
        return $this->belongsto(Doctor::class,'doctor_id');
    }

}
