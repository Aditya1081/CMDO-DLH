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
        Schema::create('detail_alats', function (Blueprint $table) {
            $table->id();
            $table->string('NamaAlat');
            $table->integer('KodeAlat');
            $table->string('Kelas');
            $table->string('UsageRange');
            $table->string('Resolusion');
            $table->string('Tolerance');
            $table->string('Brand');
            $table->string('Model');
            $table->string('NoSeri');
            $table->string('Periode');
            $table->string('LastCal');
            $table->string('NextCal');
            $table->string('StatusCal');
            $table->string('Pemilik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_alats');
    }
};
