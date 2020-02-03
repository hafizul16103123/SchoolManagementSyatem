<?php

namespace App;

use App\Notifications\AcademicResetPasswordNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Academic extends Authenticatable
{
    use Notifiable;
    /**
     * To set password reset notification.
     */
//    Eloquent relation
    public function designation(){
        $this->belongsTo(EmployeeDesignation::class);
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AcademicResetPasswordNotification($token));
    }
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','last_name','phone','employee_designation_id',
    ];
    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
