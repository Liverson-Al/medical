<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_infos', function (Blueprint $table) {
            $table->id();

            $table->string('InitialID');
            $table->string('PatientName');
            $table->string('PatientSurname');
            $table->string('PatientPatronymic');
            $table->date('BirthDate');
            $table->boolean('Sex');
            $table->string('PhoneNumber');
            $table->string('ResidenceRegion');

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
        Schema::dropIfExists('patient_infos');
    }
};


