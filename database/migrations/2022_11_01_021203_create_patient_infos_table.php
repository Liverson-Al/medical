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

//            $table->string('Name');
            $table->string('first_name');
//            $table->string('Surname');
            $table->string('second_name');
//            $table->string('Patronymic');
            $table->string('patronymic');
//            $table->date('BirthDate');
            $table->date('birthday');
            $table->boolean('sex');
            $table->string('race');
            $table->unsignedBigInteger('ClinicID');
            $table->integer('version')->nullable();

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


