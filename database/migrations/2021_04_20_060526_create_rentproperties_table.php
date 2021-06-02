<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentpropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentproperties', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Phone');
            $table->string('Email');
            $table->string('EmgContact');
            $table->string('Area');
            $table->string('Description');
            $table->string('price');
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
        Schema::dropIfExists('rentproperties');
    }
}
