<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'history';
     
    /**
    * Primary key for table history.
    * 
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [];

    public $timestamps = false;
}
