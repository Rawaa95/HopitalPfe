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
        Schema::create('evaluation_fonctionnelles', function (Blueprint $table) {
            $table->id();
            $table->boolean('equilibre_assis_bord_table');
            $table->boolean('equilibre_assis_sol');
            $table->boolean('equilibre_debout_bipodal');
            $table->boolean('equilibre_unipodal');
            $table->string('temps_droite');
            $table->string('temps_gauche');
            $table->text('cms_image_description');
            $table->text('gmfcs_image_description');
            $table->text('gillette_image_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_fonctionnelles');
    }
};
