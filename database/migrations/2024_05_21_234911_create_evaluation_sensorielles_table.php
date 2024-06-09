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
        Schema::create('evaluation_sensorielles', function (Blueprint $table) {
            $table->id();
            $table->string('evaluation_sensorielle');
            $table->string('autres_description_text');
            $table->string('troubles_audition');
            $table->string('dyspraxie_buccofaciale');
            $table->string('troubles_deglutition');
            $table->string('autre_troubles_deglutition');
            $table->boolean('trouble_langage');
            $table->text('description_langage');
            $table->boolean('troubles_fonctions');
            $table->string('type_fonctions');
            $table->text('bilan_neuro');
            $table->text('cr_bilan');
            $table->text('syncinesies');
            $table->string('troubles_vesico_sphincteriens');
            $table->text('troubles_anorectaux');
            $table->boolean('acquisition_proprete_anale');
            $table->boolean('troubles_urinaires');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_sensorielles');
    }
};
