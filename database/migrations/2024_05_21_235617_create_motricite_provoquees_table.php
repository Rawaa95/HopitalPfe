<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('motricite_provoquees', function (Blueprint $table) {
            $table->id();
            $table->string('agrippement');
            $table->string('retournement_mi');
            $table->string('retournement_tete_ms');
            $table->string('redressement_membres_superieurs');
            $table->string('schema_reptation');
            $table->string('tenu_assis');
            $table->string('tire_assis');
            $table->string('assis_tailleur');
            $table->string('sur_chaise');
            $table->string('passage_assis_debout');
            $table->string('station_verticale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motricite_provoquees');
    }
};
