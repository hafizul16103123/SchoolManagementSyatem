<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeFeeManage extends Model
{
//    Eloquent relation
    public function employee(){
        $this->hasOne(Academic::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee_fee_manages';
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
    protected $fillable = ['academic_id', 'fee_paid', 'month', 'year'];

    
}
