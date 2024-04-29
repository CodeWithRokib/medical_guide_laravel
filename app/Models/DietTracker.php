<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietTracker extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','date','time','food_qty','food_type'];
}
