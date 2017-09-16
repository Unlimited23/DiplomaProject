<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSubstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_substitutes', function (Blueprint $table) {
            $table->increments('id');
            $table->unique('id');
            
            $table->integer('parent_product_id')->unsigned();
            $table->foreign('parent_product_id')
                  ->references('product_id')->on('products');

            $table->integer('parent_product_type')->unsigned();
            $table->foreign('parent_product_type')
                ->references('type_id')->on('product_types');

            $table->boolean('isVegetarian');
            $table->boolean('isVegan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_substitutes');
    }
}
