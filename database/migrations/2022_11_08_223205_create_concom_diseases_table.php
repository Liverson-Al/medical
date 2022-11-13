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
        Schema::create('concomdiseases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('cor_heart_disease_clinic');
            $table->integer('acute_myocardial_infarction_num');
            $table->tinyInteger('current_myocardial_infarction');
            $table->tinyInteger('diabetes');
            $table->string('diabetes_type');
            $table->tinyInteger('cerebrovascular_disease');
            $table->tinyInteger('BCAStenosis');
            $table->tinyInteger('transient_ischemic_attack');
            $table->tinyInteger('ACVA');
            $table->tinyInteger('chronic_lung_disease');
            $table->tinyInteger('prev_infectious_disease');
            $table->tinyInteger('rhythm_conclusion_disturbances');
            $table->tinyInteger('thyroid_disease');
            $table->tinyInteger('acute_renal_failure');
            $table->tinyInteger('chronic_renal_failure');
            $table->tinyInteger('oncology');
            $table->tinyInteger('hematological_disease');
            $table->tinyInteger('pulmonary_embolism');
            $table->tinyInteger('chest_wall_injury');
            $table->string('aortic_valve');
            $table->tinyInteger('acquired_AV_disease');
            $table->tinyInteger('AV_degenerative_lesions');
            $table->tinyInteger('AV_infectious_lesions');
            $table->tinyInteger('AVW_traumatic_lesions');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('concomdiseases');
    }
};
