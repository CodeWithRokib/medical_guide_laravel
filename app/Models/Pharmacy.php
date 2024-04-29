<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $fillable = ['name', 'phone', 'telephone', 'address', 'image', 'email', 'helpline', 'website', 'facebook', 'ext3'];
}
