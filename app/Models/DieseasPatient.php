<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DieseasPatient extends Model
{
    protected $table = 'dieseaspatients';
    protected $fillable = ['patient_id'];
}
