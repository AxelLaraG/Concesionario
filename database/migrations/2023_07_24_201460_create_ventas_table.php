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
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_coche')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->decimal('total', 9, 2);
            $table->integer('status');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('id_coche')->references('id')->on('coches')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the foreign key constraints first to avoid errors
        Schema::table('ventas', function (Blueprint $table) {
            $table->dropForeign(['id_cliente']);
            $table->dropForeign(['id_coche']);
            $table->dropForeign(['id_usuario']);
        });

        Schema::dropIfExists('ventas');
    }
};
