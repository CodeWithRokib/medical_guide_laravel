<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyExpense extends Model
{
    protected $fillable = ['title','price','details','warehouse_id','user_id','expenses_id'];

    public function expense(){
        return $this->belongsTo('App\Expense','expenses_id');
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
