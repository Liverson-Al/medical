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

            $table->integer('LVEF'); // ФВ ЛЖ(Simpson),%
            $table->integer('LVEDV');  // КДО ЛЖ, мл
            $table->integer('LVESV'); // КСО ЛЖ, мл
            $table->integer('ascAorticD'); // диаметр восходящего отдела аорты, мм
            $table->integer('valsalvaSinusesD'); // диаметр синусов Вальсальвы, мм
            $table->integer('AVLeafletN'); // Количество створок аортального клапана
            $table->integer('AVAnnuFibrD'); // Диаметр фиброизного кольца аортального клапана, мм
            $table->integer('peakSpeedAV'); // Пиковая скорость на аортальном клапане, м/с
            $table->integer('AVPressureGradientMax'); // Градиент давления на аортальном клапане(максимальный), мм рт ст
            $table->integer('AVPressureGradientMean'); // Градиент давления на аортальном клапане(средний), мм рт ст
            $table->integer('aorticRegurgitationDegree'); // Степень аортальной регургитации (1,2,3)
            $table->integer('pulmArterySysBP'); // Систолическое давление в легочной артерии, мм рт ст
            $table->boolean('mitralInsuffBool'); // наличие митральной недостаточности
            $table->string('mitralInsuffDegree'); // степень митральной недостаточности
            $table->boolean('mitralStenBool'); // наличие митральной недостаточности
            $table->string('mitralStenDegree');  // степень митральной недостаточности
            $table->boolean('tricuspiBool'); // наличие трикуспидальной недостаточности
            $table->string('tricuspiDegree'); // степень митральной недостаточности
            $table->boolean('trialSeptalDefectPr'); // наличие дефекта межпредсердной перегородки

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
