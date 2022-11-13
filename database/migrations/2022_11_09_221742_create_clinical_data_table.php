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
            $table->string('main_diag');
            $table->tinyInteger('Aortic_dissection');
            $table->tinyInteger('intramural_hematoma');
            $table->tinyInteger('aortic_rupture');
            $table->string('patient_state');
            $table->tinyInteger('pain_beh_stern');
            $table->string('interscap_reg_pain');
            $table->string('conscious_loss');
            $table->string('low_extrem_ischemia');
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
