<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmissionFee extends Model
{
    public function myClass()
    {
        return $this->belongsTo(MyClass::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admission_fees';

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
    protected $fillable = ['my_class_id', 'fee'];
}
