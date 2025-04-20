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
        Schema::create('tech', function (Blueprint $table) {
            $table->id('id_tech');  // Clé primaire 'id_tech'
            $table->string('nom_tech');
            $table->string('prenom_tech');
            $table->string('email_tech')->unique();  // L'email doit être unique
            $table->string('pass_tech');  // Le mot de passe
            $table->timestamps();  // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::dropIfExists('tech');
    }
};
