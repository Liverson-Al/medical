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
            $table->integer('AV_annulus_fibrosis')->nullable();  // Фиброзное кольцо аортального клапана
            $table->integer('sinuses_valsalva')->nullable(); // Синусы Вальсальвы
            $table->integer('sinotubular_junction')->nullable(); // Синотубулярное соединение
            $table->integer('asc_aorta_pulm_art_bif')->nullable(); // Восходящий отдел аорты на уровне бифуркации легочной артерии
            $table->integer('asc_aorta_before_BCS')->nullable(); // Восходящий отдел аорты перед БЦС
            $table->integer('aortic_arch_before_CCA')->nullable(); // Дуги аорты перед ЛОСА
            $table->integer('aortic_arch_before_LSA')->nullable(); // Дуги аорты перед левой подключичной артерии
            $table->integer('aorticlsthmus')->nullable(); // перешеек
            $table->integer('desc_aorta_middle_part')->nullable(); // средняя часть нисходящей аорты
            $table->integer('abdominal_aorta')->nullable(); // брюшная аорта

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
        Schema::dropIfExists('m_s_q_c_angiography_aortas');
    }
};
