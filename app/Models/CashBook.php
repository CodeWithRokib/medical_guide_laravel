<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashBook extends Model
{
    protected $table = 'cashbooks';

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
