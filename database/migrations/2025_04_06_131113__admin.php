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
        Schema::create('admin', function (Blueprint $table) {
            $table->id('id_admin');  // Clé primaire 'id_admin'
            $table->string('nom_admin');
            $table->string('prenom_admin');
            $table->string('email_admin')->unique();  // L'email doit être unique
            $table->string('pass_admin');  // Le mot de passe
            $table->timestamps();  // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
