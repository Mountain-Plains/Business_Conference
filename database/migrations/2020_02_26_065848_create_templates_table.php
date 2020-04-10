<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('headerColor')->nullable();
            $table->string('headerTextColor')->nullable();
            $table->string('footerColor')->nullable();
            $table->string('footerTextColor')->nullable();
            $table->string('backColor')->nullable();
            $table->string('logo')->nullable(); //logo url
            $table->string('bgImage')->nullable(); //image url
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
        Schema::dropIfExists('templates');
    }
}
