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
            $table->rememberToken();

            $table->string('Name')->nullable();
            $table->string('Surname')->nullable();
            $table->string('Patronymic')->nullable();
            $table->date('BirthDate')->nullable();
            $table->boolean('Sex')->nullable();
            $table->unsignedBigInteger('ClinicID')->nullable();
            $table->unsignedBigInteger('RoleID')->nullable();
            $table->unsignedBigInteger('OccupationID')->nullable();
            $table->integer('WorkExperience')->nullable();

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
