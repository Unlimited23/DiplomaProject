<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->unique('product_id');
            $table->string('product_description');
            $table->string('product_name', 50);
            $table->float('product_price', 4, 2);

            $table->integer('product_type')->unsigned();
            $table->foreign('product_type')
                  ->references('type_id')->on('product_types');

            $table->boolean('isHealthy');
            $table->datetime('product_expiry_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
