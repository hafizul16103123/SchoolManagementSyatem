<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'results';

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
    protected $fillable = ['exam_type_id', 'my_class_id', 'section_id', 'subject_id', 'admission_id', 'mark'];

    //Relations
    public function exam_type()
    {
        return $this->belongsTo(ExamType::class);
    }
    public function myClass()
    {
        return $this->belongsTo(MyClass::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function admission()
    {
        return $this->belongsTo(Admission::class);
    }
}
