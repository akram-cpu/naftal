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
        Schema::create('bouteilles', function (Blueprint $table) {
            $table->id('id_bouteille'); // Clé primaire
            $table->string('reference_bouteille')->unique(); // Référence unique
            $table->integer('volume'); // Volume en litres
            $table->decimal('prix', 8, 2); // Prix avec 2 décimales
            $table->date('date_fabrication'); // Date de fabrication
            $table->timestamps(); // created_at et updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bouteilles');
    }
};
