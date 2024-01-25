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
        Schema::create('lbordereaus', function (Blueprint $table) {
            $table->id();
            $table->char('prix');
            $table->char('numero');
            $table->char('quantite');
            $table->string('statut');
            $table->foreignId('bordereaus_id')->constrained('bordereaus'); // Spécifie la table référencée
            $table->foreignId('colis_id')->constrained('colis'); // Spécifie la table référencée
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lbordereaus', function (Blueprint $table) {
            $table->dropForeign(['bordereaus_id', 'colis_id']);
        });
        Schema::dropIfExists('lbordereaus');
    }
};