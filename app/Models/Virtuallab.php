<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Virtuallab extends Model
{
    //
    protected $table = 'virtuallabs';
    protected $fillable = ['name','phone', 'division_id', 'police_station_id', 'area_id','type','status'];

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
