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
        Schema::create('evaluation_marches', function (Blueprint $table) {
            $table->id();
            $table->string('evaluation_marche');
            $table->text('description_marche');
            $table->string('vitesse_marche');
            $table->string('video_marche');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_marches');
    }
};
