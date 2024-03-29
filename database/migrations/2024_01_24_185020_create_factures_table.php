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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->char('montantT');
            $table->string('statut');
            $table->date('date');
            $table->unsignedBigInteger('dossiers_id');
            $table->foreign('dossiers_id')->references('id')->on('dossiers')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('factures', function (Blueprint $table) {
            $table->foreignId('dossiers_id');

        });
        Schema::dropIfExists('factures');
    }
};
