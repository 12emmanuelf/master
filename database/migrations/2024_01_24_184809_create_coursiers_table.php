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
        Schema::create('coursiers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('numero_telephone');
            $table->string('numero_telephone_2')->nullable();
            $table->string('numero_permis_conduire')->nullable();
            $table->string('plaque_immatriculation')->nullable();
            $table->decimal('salaire', 10, 2); // Utilisez decimal pour les champs de salaire avec deux chiffres après la virgule
            $table->enum('type_vehicule', ['vélo', 'moto', 'voiture', 'autre']);
            $table->string('cni');
            $table->string('photo')->nullable();
            $table->enum('statut', [ 'actif', 'inactif']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('zones_id');
            $table->foreign('zones_id')->references('id') ->on('zones')->onDelete('cascade');
            $table->unsignedBigInteger('sinistre_id');
            $table->foreign('sinistre_id')->references('id') ->on('sinistres')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coursiers', function (Blueprint $table) {
            $table->foreignId(['zones_id','sinistre_id']);

        });
        Schema::dropIfExists('coursiers');
    }
};
