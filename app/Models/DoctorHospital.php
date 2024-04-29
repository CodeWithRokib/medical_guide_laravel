<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorHospital extends Model
{
    protected $table ="doctor_hospital";
    protected $fillable=['doctor_id','hospital_id'];

    public function doctor(){
        return $this->belongsToMany(Doctor::class,'doctor_id');
    }

    public function hospital(){
        return $this->belongsToMany(Hospital::class);
    }
}