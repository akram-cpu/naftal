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
        Schema::create('commercials', function (Blueprint $table) {
            $table->id('id_commercial');  // Définir 'id_commercial' comme clé primaire
            $table->string('nom_commercial');
            $table->string('prenom_commercial');
            $table->string('email_commercial')->unique();  // Assurez-vous que l'email est unique
            $table->string('pass_commercial');  // Le mot de passe haché
            $table->timestamps();  // Ajoute created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commercials');
    }
};
