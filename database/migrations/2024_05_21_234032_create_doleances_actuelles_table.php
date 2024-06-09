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
        Schema::create('doleances_actuelles', function (Blueprint $table) {
            $table->id();
            $table->boolean('douleur');
            $table->string('douleur_localisation');
            $table->string('douleur_causes');
            $table->string('developpement_psychomoteur');
            $table->string('sourire_reponse');
            $table->string('tenue_tete');
            $table->string('marche');
            $table->string('proprete');
            $table->string('station_assise');
            $table->string('station_debout');
            $table->string('langage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doleances_actuelles');
    }
};
