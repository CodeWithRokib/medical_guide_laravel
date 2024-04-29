<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DurationVaccine extends Model
{
    protected $table = 'durationvaccines';
    protected $fillable = ['type','product_id','does_duration','does_number'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
