<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','age','gender','height','weight','marital','chief_complain',
        'prev_disease','ot_history','medication','disabilities','test_result'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
