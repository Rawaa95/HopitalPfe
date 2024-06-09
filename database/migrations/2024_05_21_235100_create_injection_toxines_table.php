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
        Schema::create('injection_toxines', function (Blueprint $table) {
            $table->id();
            $table->boolean('injection_toxine');
            $table->date('date_injection');
            $table->string('type_toxine');
            $table->date('dose_totale_injectee');
            $table->string('dose_par_muscle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('injection_toxines');
    }
};
