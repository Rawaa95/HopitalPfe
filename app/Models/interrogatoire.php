<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interrogatoire extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'profession_pere',
        'profession_mere',
        'mode_habitat_1',
        'mode_habitat_2',
        'scolariser',
        'niveau_scolaire',
        'rendement_scolaire',
        'description',
        'cas_similaires',
        'consanguinite',
        'suivi_grossesse',
        'par_qui',
        'deroulement_grossesse',
        'complication',
        'accouchement',
        'terme',
        'apgar',
        'pn',
        'hospitalisation_neonat',
        'nombre_jours_rea',
        'rea_neonat',
        'etiologies',
        'crise_convulsive',
        'medecin_traitant',
        'explorations',
        'echotf',
        'tdm_cerebrale',
        'irm_cerebrale',
        'eeg',
        'rx_bassin',
        'autre_r',
        'medication',
        'medication_laquelle',
        'kinesitherapie',
        'kinesitherapie_depuis_quand',
        'kinesitherapie_nb_seances',
        'appareillage',
        'appareillage_laquelle',
        'orthophonie',
        'orthophonie_depuis_quand',
        'orthophonie_nb_seances',
        'ergotherapie',
        'ergotherapie_depuis_quand',
        'ergotherapie_nb_seances',
        'chirurgie_orthopedique',
        'detail_chirurgie',
        'visite_id',
        'dossier_id',
        ];
        public function visite()
        {
            return $this->belongsTo(\App\Models\Visite::class,'visite_id');
        } 
}
