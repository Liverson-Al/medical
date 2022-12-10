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
            $table->integer('visit_id')->nullable();

            $table->integer('LVEF')->nullable(); // ФВ ЛЖ(Simpson),%
            $table->integer('LVEDV')->nullable();  // КДО ЛЖ, мл
            $table->integer('LVESV')->nullable(); // КСО ЛЖ, мл
            $table->integer('ascAorticD')->nullable(); // диаметр восходящего отдела аорты, мм
            $table->integer('valsalvaSinusesD')->nullable(); // диаметр синусов Вальсальвы, мм
            $table->integer('AVLeafletN')->nullable(); // Количество створок аортального клапана
            $table->integer('AVAnnuFibrD')->nullable(); // Диаметр фиброизного кольца аортального клапана, мм
            $table->integer('peakSpeedAV')->nullable(); // Пиковая скорость на аортальном клапане, м/с
            $table->integer('AVPressureGradientMax')->nullable(); // Градиент давления на аортальном клапане(максимальный), мм рт ст
            $table->integer('AVPressureGradientMean')->nullable(); // Градиент давления на аортальном клапане(средний), мм рт ст
            $table->integer('aorticRegurgitationDegree')->nullable(); // Степень аортальной регургитации (1,2,3)
            $table->integer('pulmArterySysBP')->nullable(); // Систолическое давление в легочной артерии, мм рт ст
            $table->boolean('mitralInsuffBool')->nullable(); // наличие митральной недостаточности
            $table->string('mitralInsuffDegree')->nullable(); // степень митральной недостаточности
            $table->boolean('mitralStenBool')->nullable(); // наличие митральной недостаточности
            $table->string('mitralStenDegree')->nullable();  // степень митральной недостаточности
            $table->boolean('tricuspiBool')->nullable(); // наличие трикуспидальной недостаточности
            $table->string('tricuspiDegree')->nullable(); // степень митральной недостаточности
            $table->boolean('trialSeptalDefectPr')->nullable(); // наличие дефекта межпредсердной перегородки

            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('version')->nullable();
            $table->date('date')->nullable();
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
