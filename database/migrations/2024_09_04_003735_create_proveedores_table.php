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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();            
            $table->string('proveedor')->unique();
            $table->string('lab');
            $table->string('contacto');
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->bigInteger('nit')->unique();
            $table->string('nocuenta')->nullable();
            $table->string('banco')->nullable();
            $table->string('tcuenta')->nullable(); 
            $table->integer('usuario_id');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
