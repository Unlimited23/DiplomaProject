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
            $table->increments('id');
            $table->unique('id');
            
            $table->integer('parent_user_id')->unsigned();
            $table->foreign('parent_user_id')
                  ->references('user_id')->on('users')
                  ->onDelete('cascade');

            $table->integer('parent_product_id')->unsigned();
            $table->foreign('parent_product_id')
                  ->references('product_id')->on('products')
                  ->onDelete('cascade');

            $table->float('quantity', 4, 2);
            $table->double('final_price', 4, 2);
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
