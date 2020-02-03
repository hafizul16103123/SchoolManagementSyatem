<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    //Eloquent Relation
    public function attendance()
    {
        return $this->hasOne(Attendance::class);
    }
    public function fee()
    {
        return $this->hasOne(StudentFee::class);
    }
    public function admission_fee()
    {
        return $this->hasOne(AdmissionFeePay::class);
    }
    public function studentType()
    {
        return $this->belongsTo(StudentType::class);
    }

    public function myClass()
    {
        return $this->belongsTo(MyClass::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admissions';

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
    protected $fillable = ['name', 'birthday', 'student_type_id', 'my_class_id', 'section_id', 'nationality', 'bloodgroup', 'address', 'previous_institute', 'residence_phone_number', 'Email', 'father_name', 'father_phonenumber', 'transport', 'admission_date'];

    
}
