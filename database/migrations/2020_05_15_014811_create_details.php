<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->longText('Biography')->nullable();
            $table->longText('Position')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Youtube')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('Siteweb')->nullable();
            $table->mediumText('Bg_image')->nullable();
            $table->mediumText('Profil_image')->nullable();
            $table->string('SubjectDoctor')->nullable();
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
        Schema::dropIfExists('details');
    }
}