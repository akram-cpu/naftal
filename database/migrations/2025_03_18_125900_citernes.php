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
        Schema::create('citernes', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->float('volume');
            $table->float('longueur');
            $table->float('largeur');
            $table->string('nature_metalique');
            $table->date('date_fabrication');
            $table->decimal('prix', 10, 2);
            $table->date('date_derniere_epreuve')->nullable();
            $table->date('date_prochaine_epreuve')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citernes');
    }
};
