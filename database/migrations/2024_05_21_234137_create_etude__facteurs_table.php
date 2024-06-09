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
        Schema::create('etude__facteurs', function (Blueprint $table) {
            $table->id();
            $table->string('anomalies');
            $table->string('parole');
            $table->string('concentration');
            $table->string('bruit');
            $table->string('toucher');
            $table->string('effort');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etude__facteurs');
    }
};
