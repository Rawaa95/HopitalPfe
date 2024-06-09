<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('specific_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('g_av');
            $table->string('g_ar');
            $table->string('d_av');
            $table->string('d_ar');
            $table->unsignedBigInteger('groupement_id');
            $table->unsignedInteger('visite_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('groupement_id')->references('id')->on('groupements');
            $table->foreign('visite_id')->references('id')->on('visites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specific_evaluations');
    }
};

