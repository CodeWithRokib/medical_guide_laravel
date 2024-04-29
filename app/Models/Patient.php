<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = ['user_id','name','email','father','mother','address','telephone','phone','dob','gender','age'];

    public function sales(){
        return $this->hasMany(Sale::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
