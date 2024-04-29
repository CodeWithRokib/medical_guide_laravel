<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccineOrder extends Model
{
    //

    protected $guarded  = ['id'];

    public function devision()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function policestation()
    {
        return $this->belongsTo(PoliceStation::class, 'police_station_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
