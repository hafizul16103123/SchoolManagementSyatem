<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subjects';

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

    //Relations
    public function sections()
    {
        return $this->belongsToMany(Section::class);
    }
    public function classes()
    {
        return $this->belongsToMany(MyClass::class);
    }
}
