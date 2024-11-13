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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nombres_cliente');
            $table->string('apellidos_cliente');
            $table->integer('edad_cliente');
            $table->string('direccion_cliente');
            $table->string('pais_cliente');
            $table->string('ciudad_cliente');
            $table->string('distrito_cliente');
            $table->string('email_cliente');
            $table->integer('numero_cliente');
            $table->integer('estado_cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
