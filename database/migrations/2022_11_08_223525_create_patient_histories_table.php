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
        Schema::create('patient_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->boolean('disHeartBloodVesselsFirstLineRelatives');
            $table->boolean('relativesConnTissDysplasia');
            $table->boolean('heartSurgeriesPr');
            $table->string('heartSurgeriesType');
            $table->boolean('geneticAnalysisPr');
            $table->string('geneticAnalysisRes');
            $table->integer('smokingExperience');
            $table->integer('alkoConsumptionExperince');
            $table->integer('drugConsumptionExperince');
            $table->string('occupationalHazards');
            $table->string('sports');
            $table->date('diseaseKnowledge');
            $table->boolean('employed');
            $table->boolean('blodThinDrugs');
            $table->boolean('disaggregants');
            $table->integer('user_id');
            $table->integer('version');
            //$table->dateTime('date');
            $table->date('date');
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
        Schema::dropIfExists('patient_histories');
    }
};

