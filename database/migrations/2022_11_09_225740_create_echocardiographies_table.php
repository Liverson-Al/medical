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
            $table->integer('visit_id');
            $table->string('LVEF');
            $table->string('LVEDV');
            $table->string('LVESV');
            $table->string('ascAorticD');
            $table->string('valsalvaSinusesD');
            $table->string('AVLeafletN');
            $table->string('AVAnnuFibrD');
            $table->string('peakSpeedAV');
            $table->string('AVPressureGradientMax');
            $table->string('AVPressureGradientMean');
            $table->boolean('aorticRegurgitationDegree');
            $table->string('pulmArterySysBP');
            $table->string('mitralInsuffStenPrD');
            $table->string('tricuspi');
            $table->string('trialSeptalDefectPr');
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
