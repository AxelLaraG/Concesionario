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
        Schema::create('reparaciones_mecanicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_reparacion')->unsigned();
            $table->integer('id_mecanico')->unsigned();
            //$table->decimal('tiempo', 9, 2);
            $table->integer('status');
            $table->timestamps();

            // Foreign key constraints for id_reparacion and id_mecanico
            $table->foreign('id_reparacion')->references('id')->on('reparaciones')->onDelete('cascade');
            $table->foreign('id_mecanico')->references('id')->on('mecanicos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reparaciones_mecanicos', function (Blueprint $table) {
            $table->dropForeign(['id_reparacion']);
            $table->dropForeign(['id_mecanico']);
        });

        Schema::dropIfExists('reparaciones_mecanicos');
    }
};
