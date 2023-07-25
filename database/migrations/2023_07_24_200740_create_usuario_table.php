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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_rol')->unsigned();
            $table->string('nombre');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->string('usuario'); 
            $table->string('password', 60); 
            $table->integer('status');
            $table->timestamps();

            $table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the foreign key constraint first to avoid errors
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign(['id_rol']);
        });

        Schema::dropIfExists('usuarios');
    }
};
