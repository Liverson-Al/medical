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
        Schema::create('concom_diseases', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->string('cor_heart_disease_clinic');
            $table->integer('acuteMyocardilInfarctionNum');
            $table->boolean('currentMyocardilInfarction');
            $table->boolean('diabetes');
            $table->string('diabetesType');
            $table->boolean('cerebrovascularDisease');
            $table->boolean('BCAStenosis');
            $table->boolean('translschAttack');
            $table->boolean('ACVA');
            $table->boolean('chronicLungDisease');
            $table->boolean('prevInfectiousDisease');
            $table->boolean('rhythmConcluctionDisturbances');
            $table->boolean('thyroidDisease');
            $table->boolean('acuteRenalFailure');
            $table->boolean('chronicRenalFailure');
            $table->boolean('oncology');
            $table->boolean('hematologicalDisease');
            $table->boolean('pulmonaryEmbolism');
            $table->boolean('chestWallInjury');
            $table->string('aorticValve');
            $table->boolean('acquiredAVDisease');
            $table->boolean('AVDegenerativeLesions');
            $table->boolean('AVInfectiousLesions');
            $table->boolean('AVWTraumaticLesionsb');
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
        Schema::dropIfExists('concom_diseases');
    }
};
