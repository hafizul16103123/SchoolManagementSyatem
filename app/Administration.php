<?php

namespace App;

use App\Notifications\AdministrationResetPasswordNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administration extends Authenticatable
{
    use Notifiable;
    /**
     * To set password reset notification.
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdministrationResetPasswordNotification($token));
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','last_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

