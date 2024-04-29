<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    protected $fillable = ['phone','name', 'division_id', 'police_station_id', 'area_id'];

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
