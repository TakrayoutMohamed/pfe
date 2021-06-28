<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FirstName');
            $table->string('LastName');
            
            $table->string('email')->unique();
            $table->string('Number')->unique();
            
            $table->string('CNE')->unique()->nullable();
            $table->string('CNI')->unique()->nullable();
            $table->string('Feliere');

            $table->string('Gender');
            $table->string('Semester')->nullable();
            
            $table->string('usertype')->nullable();
            $table->string('password');
           
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
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
