<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    public function setCreatedAtAttribute($value)
    {
    $this->attributes['created_at'] =Carbon::parse($value)->format('Y/m/d'); ;
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee_attendances';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['academic_id', 'attend'];

    
}
