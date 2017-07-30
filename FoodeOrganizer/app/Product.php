<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Primary key for table inventory.
     * 
     * @var string
     */
    protected $primaryKey = 'product_id';

    // public function inventory() 
    // {
    //     return $this->belongsTo('App\Inventory', 'parent_product_id'); //check parent_user_id
    // }
}
