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
            $table->string('patient_id');
            $table->float('height');
            $table->float('weight');
            $table->integer('BMI');
            $table->integer('BSA');
            $table->string('DBM');
            $table->tinyInteger('CTDS');
            $table->tinyInteger('Marfan');
            $table->tinyInteger('EhlersDanlos');
            $table->tinyInteger('LoeysDitz');
            $table->tinyInteger('Terner');
            $table->tinyInteger('Noonan');
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
