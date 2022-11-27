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
            $table->float('height');
            $table->float('weight');
            $table->integer('body_mass_index');
            $table->integer('body_surface_area');
            $table->integer('body_type');
            $table->boolean('connective_tissue_dysplasia');
            $table->boolean('connective_tissue_dysplasia_Marfan');
            $table->boolean('connective_tissue_dysplasia_EhlersDanlos');
            $table->boolean('connective_tissue_dysplasia_LoeysDitz');
            $table->boolean('connective_tissue_dysplasia_Terner');
            $table->boolean('connective_tissue_dysplasia_Noonan');
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
