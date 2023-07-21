<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('CocheNuevo', function (Blueprint $table) {
            $table->string('matricula',7);
            $table->foreign('matricula')->references('matricula')->on('Coche');
            $table->decimal('eliminado', 1, 0)->default(0);
            $table->integer('unidades',11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CocheNuevo');
    }
};