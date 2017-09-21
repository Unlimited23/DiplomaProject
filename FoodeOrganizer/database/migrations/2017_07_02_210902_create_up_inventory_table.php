<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('up_inventory', function (Blueprint $table) {
            $table->increments('inventory_id');
            $table->unique('inventory_id');
            $table->string('inventory_name', 50);

            $table->integer('parent_user_id')->unsigned();
            $table->foreign('parent_user_id')
                  ->references('user_id')->on('users')
                  ->onDelete('cascade');

            $table->integer('parent_product_id')->unsigned();
            $table->foreign('parent_product_id')
                  ->references('product_id')->on('products')
                  ->onDelete('cascade');

            $table->double('product_price', 4, 2);
            $table->float('product_quantity', 4, 2);
            $table->datetime('product_expiry_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('up_inventory');
    }
}
