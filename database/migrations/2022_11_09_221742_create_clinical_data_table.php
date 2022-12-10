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

            $table->string('main_diag')->nullable(); // основной диагноз
            $table->boolean('aortic_dissection')->nullable();  // наличие расслоения аорты
            $table->boolean('intramural_hematoma')->nullable(); // наличие интрамуральной гематомы
            $table->boolean('aortic_rupture')->nullable(); // наличие разрыва аорты
            $table->string('patient_state')->nullable(); // стабильное/нестабильное состояние
            $table->boolean('pain_beh_stern')->nullable(); // боли за грудиной
            $table->boolean('interscap_reg_pain')->nullable(); // боли в межлопаточной области
            $table->boolean('conscious_loss')->nullable(); // потеря сознания
            $table->boolean('low_extrem_ischemia')->nullable(); // ишемия нижних конечностей

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
        Schema::dropIfExists('clinical_data');
    }
};
