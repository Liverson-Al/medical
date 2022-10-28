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
            $table->string('PatientID');
            $table->id();
            $table->unsignedBigInteger('EmployeeID');
            $table->string('ExaminationPlace');
            $table->date('ExaminationDate');
            $table->integer('VisitNum');
            $table->string('Comment')->nullable();
            $table->unsignedBigInteger('ClinicID');
//            $table->string('DoctorID');

            $table->timestamps();
            $table->softDeletes();


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
