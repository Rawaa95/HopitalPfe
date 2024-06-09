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
        Schema::create('attitude_spontanees', function (Blueprint $table) {
            $table->id();
            $table->string('attitude_sp');
            $table->string('motricite_dd_dv_ms_mi');
            $table->string('reactions_posturales');
            $table->string('suspension_ventrale');
            $table->string('suspension_dorsale');
            $table->string('suspension_laterale');
            $table->string('reaction_balancier_MI');
            $table->string('reaction_parachute_anterieur');
            $table->string('reaction_parachute_posterieur');
            $table->string('reaction_parachute_lateral');
            $table->string('attitude_sp_shema');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attitude_spontanees');
    }
};
