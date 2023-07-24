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
            $table->increments('id');
            $table->integer('unidades');
            $table->integer('coche_id')->unsigned();
            $table->foreign('coche_id')->references('id')->on('Coche');
            $table->integer('status');
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