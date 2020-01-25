<?php

namespace App;

use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Dorvidas\Ratings\Models\RateableTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use TCG\Voyager\Models\Role;

class User extends Authenticatable
{
    use Notifiable;
    use Favoriteability;
    use RateableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'phone', 'phone_verification',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function productions()
    {
        return $this->hasMany(Production::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function announces()
    {
        return $this->hasMany(Announce::class);
    }

    public static function phoneReplacement($code, $phone)
    {
        return str_replace('+', '', $code).preg_replace('/[-\s]/', '', $phone);
    }
}
