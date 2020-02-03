<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyClassSection extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'my_class_sections';

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
    protected $fillable = ['my_class_id', 'section_id'];

    
}
