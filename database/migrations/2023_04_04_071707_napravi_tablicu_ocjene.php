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
        Schema::create('ocjene', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ucenik_id')->constrained('ucenici');
            $table->foreignId('predmet_id')->constrained('predmeti');
            $table->foreignId('rubrika_id')->nullable()->constrained('rubrike');
            $table->integer('ocjena');
            $table->date('datum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocjene');
    }
};
