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
        Schema::create('interrogatoires', function (Blueprint $table) {
            $table->id();
            $table->string('profession_pere');
            $table->string('profession_mere');
            $table->boolean('mode_habitat_1');
            $table->boolean('mode_habitat_2');
            $table->boolean('scolariser');
            $table->string('niveau_scolaire');
            $table->string('rendement_scolaire');
            $table->text('description');
            $table->boolean('cas_similaires');
            $table->boolean('consanguinite');
            $table->boolean('suivi_grossesse');
            $table->boolean('deroulement_grossesse');
            $table->text('complication');
            $table->boolean('accouchement');
            $table->string('terme');
            $table->string('apgar');
            $table->string('pn');
            $table->boolean('hospitalisation_neonat');
            $table->integer('nombre_jours_rea');
            $table->boolean('rea_neonat');
            $table->string('etiologies');
            $table->boolean('crise_convulsive');
            $table->string('medecin_traitant');
            $table->text('explorations');
            $table->string('echotf');
            $table->string('tdm_cerebrale');
            $table->string('irm_cerebrale');
            $table->string('eeg');
            $table->string('rx_bassin');
            $table->string('autre_r');
            $table->boolean('medication');
            $table->text('medication_laquelle');
            $table->boolean('kinesitherapie');
            $table->string('kinesitherapie_depuis_quand');
            $table->integer('kinesitherapie_nb_seances');
            $table->boolean('appareillage');
            $table->text('appareillage_laquelle');
            $table->boolean('orthophonie');
            $table->date('orthophonie_depuis_quand');
            $table->integer('orthophonie_nb_seances');
            $table->boolean('ergotherapie');
            $table->date('ergotherapie_depuis_quand');
            $table->integer('ergotherapie_nb_seances');
            $table->boolean('chirurgie_orthopedique');
            $table->text('detail_chirurgie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interrogatoires');
    }
};
