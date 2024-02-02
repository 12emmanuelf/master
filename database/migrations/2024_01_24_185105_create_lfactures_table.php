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
        Schema::create('lfactures', function (Blueprint $table) {
            $table->id();
            $table->char('numero');
            $table->char('quantite');
            $table->string('statut');
            $table->unsignedBigInteger('factures_id');
            $table->foreign('factures_id')->references('id')->on('factures')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lfactures', function (Blueprint $table) {
            $table->foreignId('factures_id');

        });
        Schema::dropIfExists('lfactures');
    }
};
