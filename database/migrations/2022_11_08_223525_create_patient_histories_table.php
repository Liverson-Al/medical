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

            $table->string('disHeartBloodVesselsFirstLineRelatives'); // Заболевания сердца и сосудов у родственников первой линии (дедушки/бабушки, папы/мамы, братья/сестры, дети, внуки)
            $table->boolean('relativesConnTissDysplasia'); // Наличие соединительно-тканевой дисплазии у родстенников
            $table->boolean('heartSurgeriesPr'); // Наличие операций на сердце в прошлом
            $table->string('heartSurgeriesType'); // Тип операций на сердце в прошлом
            $table->boolean('geneticAnalysisPr'); // Проходил ли генетический анализ
            $table->string('geneticAnalysisRes'); // Результаты генетического анализа
            $table->boolean('smokingBool'); // Есть опыт курения
            $table->integer('smokingExperience');  // опыт курения
            $table->boolean('alkoConsumptionBool'); // Употребление алкоголя
            $table->integer('alkoConsumptionExperince'); // опыт употребления алкоголя
            $table->boolean('drugConsumptionBool'); // Есть опыт употребления наркотиков
            $table->integer('drugConsumptionExperince'); // Опыт употребления наркотиков
            $table->string('occupationalHazards'); // Профессиональные вредности
            $table->string('sports'); // Занятие спортом
            $table->date('diseaseKnowledge'); // Когда узнал о заболевании
            $table->boolean('employed'); // Работает
            $table->boolean('blodThinDrugs'); // Принимает ли кроворазжижающие препараты
            $table->boolean('disaggregants'); // Принимает ли дезагреганты

            $table->integer('user_id');
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
        Schema::dropIfExists('patient_histories');
    }
};

