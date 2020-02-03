<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //Elequent Relation
    public function admissions()
    {
        return $this->hasMany(Admission::class);
    }
    public function myClass()
    {
        return $this->belongsToMany(MyClass::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sections';

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
