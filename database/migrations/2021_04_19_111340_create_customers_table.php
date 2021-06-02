<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerName');
            $table->string('Email');
            $table->string('Gender');
            $table->string('CustomerAge');
            $table->string('CustomerAddress');
            $table->string('CustomerCity');
            $table->string('CustomerPostCode');
            $table->string('CustomerCountry');
            $table->string('CustomerState');
            $table->string('CustomerPhone');
            $table->string('AgentFirstName');
            $table->string('AgentLastName');
            $table->string('AgentGender');
            $table->string('AgentAddress');
            $table->string('AgentCity');
            $table->string('AgentCountry');
            $table->string('AgentState');
            $table->string('AgentPhone');
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
        Schema::dropIfExists('customers');
    }
}
