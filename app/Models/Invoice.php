<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [ 'invoice_no', 'payment_type', 'trxId', 'total', 'discount', 'customer_type', 'supplier_id', 'patient_id', 'warehouse_id', 'user_id', 'note','product_type','custom_date'];

    public function purchases(){
        return $this->hasMany(Purchase::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class,'supplier_id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function cashbooks(){
        return $this->hasMany(CashBook::class);
    }
    
    public function sales(){
        return $this->hasMany(Sale::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
    
}


































