<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{

    //Elequent Relation

    public function admissions()
    {
        return $this->hasMany(Admission::class);
    }
    public function section()
    {
        return $this->belongsToMany(Section::class);
    }
    public function fee()
    {
        return $this->hasOne(ClassFee::class);
    }
    public function admission_fee()
    {
        return $this->hasOne(AdmissionFee::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'my_classes';

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
