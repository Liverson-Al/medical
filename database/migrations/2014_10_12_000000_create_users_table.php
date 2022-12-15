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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');

            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();
            $table->date('birthdate')->nullable();
            $table->boolean('sex')->nullable();
            $table->unsignedBigInteger('ClinicID')->nullable();
            $table->unsignedBigInteger('RoleID')->nullable();
            $table->unsignedBigInteger('OccupationID')->nullable();
            $table->integer('workExperience')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
};
