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
        Schema::create('tarrifications', function (Blueprint $table) {
            $table->id();
            $table->decimal('prix');
            $table->foreignId('zones_id')->constrained();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tarrifications', function (Blueprint $table) {
            $table->foreignId('zones_id');

        });
        Schema::dropIfExists('tarrifications');
    }
};
