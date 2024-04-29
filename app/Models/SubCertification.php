<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCertification extends Model
{
    protected $table = 'subcertifications';
    protected $fillable = ['name','certification_id'];

    public function certification(){
        return $this->belongsTo(Certification::class);
    }
}
