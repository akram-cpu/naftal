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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('id_client'); // Clé primaire
            $table->string('nom_client', 100);
            $table->string('prenom_client', 100);
            $table->string('adresse_client')->nullable(); // Peut être NULL
            $table->string('tlf_client', 20)->unique(); // Numéro unique
            $table->timestamps(); // created_at et updated_at
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
