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
        Schema::create('examenpodoscopiques', function (Blueprint $table) {
            $table->id();
            $table->boolean('pied_creux');
            $table->string('pied_creux_droit');
            $table->string('pied_creux_gauche');
            $table->boolean('pied_plat');
            $table->string('pied_plat_droit');
            $table->string('pied_plat_gauche');
            $table->boolean('varus_arriere_pied');
            $table->string('varus_arriere_pied_droit');
            $table->string('varus_arriere_pied_gauche');
            $table->boolean('varus_avant_pied');
            $table->string('varus_avant_pied_droit');
            $table->string('varus_avant_pied_gauche');
            $table->boolean('valgus_arriere_pied');
            $table->string('valgus_arriere_pied_droit');
            $table->string('valgus_arriere_pied_gauche');
            $table->boolean('valgus_avant_pied');
            $table->string('valgus_avant_pied_droit');
            $table->string('valgus_avant_pied_gauche');
            $table->boolean('cassure_medio_pied');
            $table->string('cassure_medio_pied_droit');
            $table->string('cassure_medio_pied_gauche');
            $table->string('photos_podoscopique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examenpodoscopiques');
    }
};
