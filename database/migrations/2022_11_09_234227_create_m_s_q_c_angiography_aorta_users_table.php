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
        Schema::create('m_s_q_c_angiography_aorta_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('m_s_q_c_angiography_aorta_id');
            $table->unsignedBigInteger('user_id');

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
        Schema::dropIfExists('m_s_q_c_angiography_aorta_users');
    }
};
