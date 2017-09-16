<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubstitute extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'product_substitutes';
     
    /**
    * Primary key for table recipe.
    * 
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [];

    public $timestamps = false;
}
