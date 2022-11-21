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

            $table->string('Name');
            $table->string('Surname');
            $table->string('Patronymic');
            $table->date('BirthDate');
            $table->boolean('Sex');
            $table->string('race');
            $table->unsignedBigInteger('ClinicID');

            $table->timestamps();

            $table->softDeletes();
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


