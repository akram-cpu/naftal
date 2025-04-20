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
        Schema::create('installations', function (Blueprint $table) {
            $table->id('id_installation'); // Clé primaire auto-incrémentée
            $table->date('date_installation'); // Date de l'installation
            $table->date('date_dernier_verification')->nullable(); // Peut être NULL
            $table->date('date_prochaine_verification')->nullable(); // Peut être NULL
            $table->timestamps(); // Ajoute created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installations');
    }
};
