<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'up_inventory';

    /**
     * Primary key for table inventory.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    // public function products() 
    // {
    //     return $this->belongsToMany('App\Product', 'products', 'parent_product_id');
    // }

    public function users()
    {
        return $this->belongsTo('App\User', 'users', 'parent_user_id');
    }
}
