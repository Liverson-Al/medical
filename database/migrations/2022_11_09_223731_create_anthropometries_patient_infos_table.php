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
        Schema::create('anthropometries_patient_infos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('anthropometries_id');
            $table->unsignedBigInteger('patient_info_id');

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
        Schema::dropIfExists('anthropometries_patient_infos');
    }
};
