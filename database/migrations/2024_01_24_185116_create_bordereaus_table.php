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
        Schema::create('bordereaus', function (Blueprint $table) {
            $table->id();
            $table->char('montantT');
            $table->string('statut');
            $table->date('date');
            $table->foreignId('coursiers_id')->constrained();
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bordereaus', function (Blueprint $table) {
            $table->foreignId('coursiers_id');

        });
        Schema::dropIfExists('bordereaus');
    }
};
