<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OverseasTreatment extends Model
{
    //overseas_treatments

    protected $table = 'overseas_treatments';
    protected $guarded  = ['id'];

    public function devision()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function policestation()
    {
        return $this->belongsTo(PoliceStation::class, 'police_station_id', 'id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }
}
