<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDesignation extends Model
{
//    Eloquent relation
    public function employee(){
        $this->hasOne(Academic::class);
    }
    public function designation_fee(){
        $this->hasOne(EmployeeDesignationFee::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee_designations';

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
    protected $fillable = ['name'];

    
}
