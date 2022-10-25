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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            $table->string('Name');
            $table->string('Surname');
            $table->string('Patronymic');
            $table->date('BirthDate');
            $table->boolean('Sex');
            $table->string('Region');
            $table->string('City');
            $table->integer('WorkExperience');

            $table->timestamps();

            $table->unsignedBigInteger('PlaceOfWork_id');
            $table->unsignedBigInteger('Occupation_id');
            $table->unsignedBigInteger('Role_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
