<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $table = 'specialists';
    protected $fillable = ['name'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class,'specialist_id','id');
    }

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
