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
            $table->integer('patient_id')->nullable();

            $table->string('disHeartBloodVesselsFirstLineRelatives')->nullable(); // Заболевания сердца и сосудов у родственников первой линии (дедушки/бабушки, папы/мамы, братья/сестры, дети, внуки)
            $table->boolean('relativesConnTissDysplasia')->nullable(); // Наличие соединительно-тканевой дисплазии у родстенников
            $table->boolean('heartSurgeriesPr')->nullable(); // Наличие операций на сердце в прошлом
            $table->string('heartSurgeriesType')->nullable(); // Тип операций на сердце в прошлом
            $table->boolean('geneticAnalysisPr')->nullable(); // Проходил ли генетический анализ
            $table->string('geneticAnalysisRes')->nullable(); // Результаты генетического анализа
            $table->boolean('smokingBool')->nullable(); // Есть опыт курения
            $table->integer('smokingExperience')->nullable();  // опыт курения
            $table->boolean('alkoConsumptionBool')->nullable(); // Употребление алкоголя
            $table->integer('alkoConsumptionExperince')->nullable(); // опыт употребления алкоголя
            $table->boolean('drugConsumptionBool')->nullable(); // Есть опыт употребления наркотиков
            $table->integer('drugConsumptionExperince')->nullable(); // Опыт употребления наркотиков
            $table->string('occupationalHazards')->nullable(); // Профессиональные вредности
            $table->string('sports')->nullable(); // Занятие спортом
            $table->date('diseaseKnowledge')->nullable(); // Когда узнал о заболевании
            $table->boolean('employed')->nullable(); // Работает
            $table->boolean('blodThinDrugs')->nullable(); // Принимает ли кроворазжижающие препараты
            $table->boolean('disaggregants')->nullable(); // Принимает ли дезагреганты

            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('patient_histories');
    }
};

