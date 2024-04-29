<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AskDoctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','question_user_id','question','ans'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
