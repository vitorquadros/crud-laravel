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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('crm');
            $table->timestamps();
        });

        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->date('date');
            $table->timestamps();
        });

        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->boolean('future');
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
        Schema::dropIfExists('doctors');
        Schema::dropIfExists('appointments');
        Schema::dropIfExists('vaccines');
    }
};
