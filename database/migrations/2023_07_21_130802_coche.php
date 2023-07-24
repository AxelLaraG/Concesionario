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
        Schema::create('Coche',function(Blueprint $table){
            $table->increments('id');
            $table->string('color',20);
            $table->string('marca',20);
            $table->string('matricula',10)->unique();
            $table->string('modelo',20);
            $table->decimal('precio',9,2);
            $table->decimal('tipo',1,0);
            $table->integer('status');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Coche');
    }
};
