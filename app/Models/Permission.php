<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name','permission_key','label_id'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
