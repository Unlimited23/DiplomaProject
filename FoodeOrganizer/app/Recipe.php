<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'recipes';
     
    /**
    * Primary key for table recipe.
    * 
    * @var string
    */
    protected $primaryKey = 'recipe_id';

    protected $fillable = [];

    public $timestamps = false;
}
