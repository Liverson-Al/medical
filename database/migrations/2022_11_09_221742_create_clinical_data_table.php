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
        Schema::create('clinical_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visit_id');

            $table->string('main_diag'); // основной диагноз
            $table->boolean('aortic_dissection');  // наличие расслоения аорты
            $table->boolean('intramural_hematoma'); // наличие интрамуральной гематомы
            $table->boolean('aortic_rupture'); // наличие разрыва аорты
            $table->string('patient_state'); // стабильное/нестабильное состояние
            $table->boolean('pain_beh_stern'); // боли за грудиной
            $table->boolean('interscap_reg_pain'); // боли в межлопаточной области
            $table->boolean('conscious_loss'); // потеря сознания
            $table->boolean('low_extrem_ischemia'); // ишемия нижних конечностей

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
        Schema::dropIfExists('clinical_data');
    }
};
