<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('NumberFile')->nullable();
            $table->string('Semester_data')->nullable();
            $table->mediumText('File')->nullable();
            $table->string('Title')->nullable();
            $table->longText('Description')->nullable();
            $table->longText('Statement')->nullable();
            $table->string('Subject')->nullable();
            $table->string('Typedata')->nullable();
            $table->string('Felieredata')->nullable();
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
        Schema::dropIfExists('files');
    }
}