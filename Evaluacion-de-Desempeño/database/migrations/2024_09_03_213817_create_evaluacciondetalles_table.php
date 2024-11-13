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
        Schema::create('evaluacciondetalles', function (Blueprint $table) {
            $table->id();
            $table->integer('evaluacion_id');
            $table->integer('metrica_id');
            $table->decimal('valor_obtenido', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacciondetalles');
    }
};
