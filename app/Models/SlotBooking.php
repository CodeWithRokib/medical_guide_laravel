<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotBooking extends Model
{
    use HasFactory;


    protected $fillable = ['doctor_id','doctor_slot_id', 'type', 'gender', 'name', 'age','weight','location','phone'];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'id','doctor_id');
    }

    public function slot()
    {
        return $this->belongsTo(DoctorSlot::class,'id','slot_id');
    }
}
