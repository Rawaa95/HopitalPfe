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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->boolean('platre');
            $table->text('type_platre');
            $table->boolean('ergotherapie');
            $table->date('depuis_quand');
            $table->boolean('orthophonie');
            $table->boolean('neuropsychologique');
            $table->boolean('chirurgie');
            $table->text('decision_chirurgie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
