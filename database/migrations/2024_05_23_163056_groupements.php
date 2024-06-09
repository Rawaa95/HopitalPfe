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

        {
            Schema::create('groupements', function (Blueprint $table) {
                $table->id();
                $table->string('designation');
                $table->string('type');
                $table->integer('use');
                $table->unsignedBigInteger('parent_id')->nullable();
                $table->timestamps();

                // Foreign key constraint
                $table->foreign('parent_id')->references('id')->on('groupements');
            });
    }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupements');
    }
};


