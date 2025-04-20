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
        Schema::create('rapport_installation', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('numero_rapport')->unique(); // Numéro unique du rapport
            $table->date('date_rapport'); // Date du rapport
            $table->string('type_rapport'); // Type de rapport
            $table->text('observation_rapport')->nullable(); // Observations
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapport_installation');
    }
};
