<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use tizis\laraComments\Traits\Commenter;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Commenter;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        if (password_get_info($value)['algo'] === 0) {
            $value = bcrypt($value);
        }
        $this->attributes['password'] = $value;
    }

}
