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
        Schema::create('nastavnici', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('kor_ime');
            $table->string('lozinka');
            $table->boolean('stalno_uposlen')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nastavnici');
    }
};
