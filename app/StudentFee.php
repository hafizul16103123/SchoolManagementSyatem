<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFee extends Model
{
    //Eloquent Relation
    public function student()
    {
        return $this->belongsTo(Admission::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'student_fees';

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
    protected $fillable = ['admission_id', 'fee_paid', 'month', 'year'];

    
}
