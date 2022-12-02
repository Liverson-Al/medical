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
        Schema::create('m_s_q_c_angiography_aortas', function (Blueprint $table) {
            $table->id();
            $table->integer('VisitPatientID');

            // все в мм
            // Диамтер на уровне:
            $table->integer('AV_annulus_fibrosis');  // Фиброзное кольцо аортального клапана
            $table->integer('sinuses_valsalva'); // Синусы Вальсальвы
            $table->integer('sinotubular_junction'); // Синотубулярное соединение
            $table->integer('asc_aorta_pulm_art_bif'); // Восходящий отдел аорты на уровне бифуркации легочной артерии
            $table->integer('asc_aorta_before_BCS'); // Восходящий отдел аорты перед БЦС
            $table->integer('aortic_arch_before_CCA'); // Дуги аорты перед ЛОСА
            $table->integer('aortic_arch_before_LSA'); // Дуги аорты перед левой подключичной артерии
            $table->integer('aorticlsthmus'); // перешеек
            $table->integer('desc_aorta_middle_part'); // средняя часть нисходящей аорты
            $table->integer('abdominal_aorta'); // брюшная аорта

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
        Schema::dropIfExists('m_s_q_c_angiography_aortas');
    }
};
