<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

//    public function setCreatedAtAttribute($value)
//    {
//        $this->attributes['created_at'] =Carbon::parse($value)->format('Y/m/d');
//    }
    public function admission(){
        return $this->belongsTo(Admission::class);
    }

    public function classes(){
        return $this->belongsTo(MyClass::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attendances';

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
    protected $fillable = ['admission_id','my_class_id','section_id','attend', 'created_at', 'updated_at'];

    
}
