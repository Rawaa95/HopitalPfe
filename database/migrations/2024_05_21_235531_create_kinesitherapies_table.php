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
        Schema::create('kinesitherapies', function (Blueprint $table) {
            $table->id();
            $table->boolean('kinesitherapie');
            $table->integer('seances_par_semaine');
            $table->boolean('autoreeducation');
            $table->string('apprentissage_fait');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kinesitherapies');
    }
};
