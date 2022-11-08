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
        Schema::create('patienthistories', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('dis_heart_blood_vessels_first_line_relatives');
            $table->tinyInteger('relatives_conn_tiss_dysplasia');
            $table->tinyInteger('heart_surgeries_pr');
            $table->string('heart_surgeries_type');
            $table->tinyInteger('genetic_analysis_pr');
            $table->tinyInteger('genetic_analysis_res');
            $table->integer('smoking_experience');
            $table->integer('alko_consumption_experince');
            $table->integer('drug_consumption_experience');
            $table->string('occupational_hazards');
            $table->string('sports');
            $table->date('disease_knowledge');
            $table->tinyInteger('works');
            $table->tinyInteger('blood_thin_drugs');
            $table->tinyInteger('disaggregants');
            $table->unsignedBigInteger('employee_id');
            $table->integer('version');
            $table->dateTime('date');
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
        Schema::dropIfExists('patienthistories');
    }
};
