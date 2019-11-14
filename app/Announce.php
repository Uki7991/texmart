<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    protected $fillable = ['name', 'content', 'user_id', 'phone', 'code', 'email',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
