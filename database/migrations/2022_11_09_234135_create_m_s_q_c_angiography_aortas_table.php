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
            $table->integer('AV_annulus_fibrosis');
            $table->integer('sinuses_valsalva');
            $table->integer('sinotubular_junction');
            $table->integer('asc_aorta_pulm_art_bif');
            $table->integer('asc_aorta_before_BCS');
            $table->integer('aortic_arch_before_CCA');
            $table->integer('aortic_arch_before_LSA');
            $table->integer('aorticlsthmus');
            $table->integer('desc_aorta_middle_part');
            $table->integer('abdominal_aorta');
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
