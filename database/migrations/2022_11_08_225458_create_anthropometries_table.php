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
        Schema::create('anthropometries', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');

            $table->integer('height'); // рост
            $table->integer('weight'); // вес
            $table->integer('body_mass_index'); // индекс массы тела
            $table->integer('body_surface_area'); //площадь поверхности тела
            $table->string('body_type'); // тип тела
            $table->boolean('connective_tissue_dysplasia'); // дисплазия соединительных тканей
            $table->boolean('connective_tissue_dysplasia_Marfan');  // синдром Марфана
            $table->boolean('connective_tissue_dysplasia_EhlersDanlos'); // синдром Элерса-Данло
            $table->boolean('connective_tissue_dysplasia_LoeysDitz'); // синдром Лойеса-Дитц
            $table->boolean('connective_tissue_dysplasia_Terner'); // синдром Тернера
            $table->boolean('connective_tissue_dysplasia_Noonan'); // синдром Нуана
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
        Schema::dropIfExists('anthropometries');
    }
};
