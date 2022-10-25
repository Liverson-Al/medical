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
        Schema::create('visitdata', function (Blueprint $table) {
            $table->id();
            $table->string('PatientID');
            $table->string('ExaminationPlace');
            $table->date('ExaminationDate');
            $table->integer('VisitNum');
//            $table->string('DoctorID');

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('patientinfo_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitdata');
    }
};
