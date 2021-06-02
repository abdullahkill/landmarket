<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rentproperty_id');
            $table->foreign('rentproperty_id')->references('id')->on('rentproperties')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image');
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
        Schema::dropIfExists('rent_images');
    }
}
