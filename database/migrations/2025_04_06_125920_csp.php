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
        Schema::create('csp', function (Blueprint $table) {
            $table->id('id_csp');  // Définir 'id_csp' comme clé primaire
            $table->string('nom_csp');
            $table->string('prenom_csp');
            $table->string('email_csp')->unique();  // Assurez-vous que l'email est unique
            $table->string('pass_csp');  // Le mot de passe haché
            $table->timestamps();  // Ajoute created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csp');
    }
};
