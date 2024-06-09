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
        Schema::create('attitude_spontanees_dds', function (Blueprint $table) {

            $table->id();
            $table->string('attitude_spontanee_dd_description');
            $table->string('attitude_spontanee_dd_video');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attitude_spontanees_dds');
    }
};
