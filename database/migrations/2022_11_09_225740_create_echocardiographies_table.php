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
        Schema::create('echocardiographies', function (Blueprint $table) {
            $table->id();
            $table->string('VisitPatientID');
            $table->string('LVEF');
            $table->string('LVEDV');
            $table->string('LVESV');
            $table->string('AscAorticD');
            $table->string('ValsalvaSinusesD');
            $table->string('AVLeafletN');
            $table->string('AVAnnuFibrD');
            $table->string('PeakSpeedAV');
            $table->string('AVPressureGradientMax');
            $table->string('AVPressureGradientMean');
            $table->tinyInteger('AorticRegurgitationDegree');
            $table->string('PulmArterySysBP');
            $table->string('MitralInsuffStenPrD');
            $table->string('Tricuspi');
            $table->string('AtrialSeptalDefectPr');
            $table->unsignedBigInteger('user_id');
            $table->integer('version');
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
        Schema::dropIfExists('echocardiographies');
    }
};
