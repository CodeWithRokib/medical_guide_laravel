<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected  $table='warehouses';

    protected $fillable = ['id','name', 'phone', 'address', 'contact_person'];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
