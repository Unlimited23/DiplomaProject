<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBmiCalculatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmi_calculator', function (Blueprint $table) {
            $table->increments('id');
            $table->float('user_height');
            $table->float('user_weight');
            $table->boolean('user_gender');
            $table->tinyInteger('user_age');
            $table->integer('parent_user_id')->unsigned();
            $table->foreign('parent_user_id')
                  ->references('user_id')->on('users');
            $table->integer('bmi');
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
        Schema::dropIfExists('bmi_calculator');
    }
}
