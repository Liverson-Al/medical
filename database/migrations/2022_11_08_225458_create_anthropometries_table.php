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

            $table->integer('height')->nullable(); // рост
            $table->integer('weight')->nullable(); // вес
            $table->integer('body_mass_index')->nullable(); // индекс массы тела
            $table->integer('body_surface_area')->nullable(); //площадь поверхности тела
            $table->string('body_type')->nullable(); // тип тела
            $table->boolean('connective_tissue_dysplasia')->nullable(); // дисплазия соединительных тканей
            $table->boolean('connective_tissue_dysplasia_Marfan')->nullable();  // синдром Марфана
            $table->boolean('connective_tissue_dysplasia_EhlersDanlos')->nullable(); // синдром Элерса-Данло
            $table->boolean('connective_tissue_dysplasia_LoeysDitz')->nullable(); // синдром Лойеса-Дитц
            $table->boolean('connective_tissue_dysplasia_Terner')->nullable(); // синдром Тернера
            $table->boolean('connective_tissue_dysplasia_Noonan')->nullable(); // синдром Нуана
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
        Schema::dropIfExists('anthropometries');
    }
};
