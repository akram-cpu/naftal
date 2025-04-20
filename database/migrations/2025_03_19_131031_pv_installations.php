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
        Schema::create('pv_installations', function (Blueprint $table) {
            $table->id(); // Clé primaire (id auto-incrémenté)
            $table->string('numero_pv')->unique(); // Numéro du PV (unique)
            $table->date('date_pv'); // Date du PV
            $table->text('observation_pv')->nullable(); // Observation (peut être vide)
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pv_installations');
    }
};
