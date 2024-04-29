<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = ['name','about','image','division_id','address','phone','email','location'];

    public function doctors(){
        return $this->hasMany(Doctor::class,'hospital_id');
    }

    public function division(){
        return $this->belongsTo(Division::class);
    }
}

