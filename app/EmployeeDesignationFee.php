<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDesignationFee extends Model
{
    //    Eloquent relation
    public function designation_salary(){
        $this->belongsTo(EmployeeDesignation::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee_designation_fees';
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey ='id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['employee_designation_id', 'salary'];
}
