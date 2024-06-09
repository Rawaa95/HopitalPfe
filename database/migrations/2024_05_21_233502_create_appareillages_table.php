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
    Schema::create('appareillages', function (Blueprint $table) {
        $table->id();
        $table->boolean('corset_siege');
        $table->boolean('verticalisateur');
        $table->boolean('acp');
        $table->boolean('fr');
        $table->boolean('deambulateur');
        $table->boolean('attelle_tamarak_marche');
        $table->boolean('attelle_anti_talus');
        $table->boolean('corset_garchoix');
        $table->boolean('orthese_main');
        $table->boolean('orthese_plantaire');
        $table->text('type_orthese_plantaire');
        $table->boolean('chaussures');
        $table->text('remarque');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appareillages');
    }
};
