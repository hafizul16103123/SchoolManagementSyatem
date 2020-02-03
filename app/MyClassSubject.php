<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyClassSubject extends Model
{
    //Eloquent relation
    public function classes()
    {
        return $this->belongsToMany(MyClass::class);
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'my_class_subjects';

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
    protected $fillable = ['my_class_id', 'subject_id'];

    
}
