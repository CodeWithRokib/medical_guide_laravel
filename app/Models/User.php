<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable implements JWTSubject, HasMedia
{
    use Notifiable, InteractsWithMedia;

    protected $fillable = [
        'name', 'email', 'password','role_id','service_type','division_id','police_station_id','area_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function customer()
    {
        return $this->hasOne(Patient::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getImageAttribute()
    {
        if (!empty($this->getFirstMediaUrl('user'))) {
            return asset($this->getFirstMediaUrl('user'));
        }
        return asset('image/default.png');
    }

    public function getNidfAttribute()
    {
        if (!empty($this->getFirstMediaUrl('nid_front'))) {
            return asset($this->getFirstMediaUrl('nid_front'));
        }
        return asset('image/default.png');
    }

    public function getNidbAttribute()
    {
        if (!empty($this->getFirstMediaUrl('nid_back'))) {
            return asset($this->getFirstMediaUrl('nid_back'));
        }
        return asset('image/default.png');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'id','user_id');
    }
}
