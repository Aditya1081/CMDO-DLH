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
        Schema::create('spek_alats', function (Blueprint $table) {
            $table->id();
            $table->int('KodeAlat');
            $table->string('Brand');
            $table->string('Model');
            $table->string('NoSeri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spek_alats');
    }
};
