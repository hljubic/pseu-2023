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
        Schema::create('ucenici', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->date('datum_rodjenja')->nullable();
            $table->string('jmbg')->nullable();
            $table->enum('spol', ['musko', 'zensko']);
            $table->foreignId('grad_id')->constrained('gradovi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ucenici');
    }
};
