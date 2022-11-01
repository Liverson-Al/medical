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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('Name');
            $table->string('Surname');
            $table->string('Patronymic');
            $table->date('BirthDate');
            $table->boolean('Sex');
            $table->unsignedBigInteger('ClinicID');
            $table->unsignedBigInteger('RoleID');
            $table->unsignedBigInteger('OccupationID');
            $table->integer('WorkExperience');

            $table->timestamps();

//            $table->unsignedBigInteger('PlaceOfWork_id')->nullable();




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
        Schema::dropIfExists('employees');
    }
};
