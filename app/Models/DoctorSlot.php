<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSlot extends Model
{
    use HasFactory;

    protected $fillable = ['doctor_id', 'date', 'slot_from', 'slot_to', 'status'];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
