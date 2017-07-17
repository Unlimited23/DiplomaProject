<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //TODO: remove nullable after adding fields;
            $table->increments('user_id');
            $table->unique('user_id');
            $table->string('user_email', 50)->unique();
            $table->string('user_username', 30);
            $table->string('user_fname', 50)->nullable();
            $table->string('user_lname', 50)->nullable();
            $table->string('user_password');
            $table->string('user_country', 50)->nullable();
            $table->string('user_city', 50)->nullable();
            $table->string('user_address', 50)->nullable();
            $table->string('user_address2', 50)->nullable();
            $table->string('user_postcode', 20)->nullable();
            $table->string('user_phone', 20)->nullable();
            $table->string('user_membership', 30)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
