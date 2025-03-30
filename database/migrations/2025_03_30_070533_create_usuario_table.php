<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono', 10)->nullable();
            $table->string('celular', 10);
            $table->string('curp', 18);
            $table->string('nombre_usuario');
            $table->string('correo_electronico')->unique();
            $table->string('contrasennia');
            $table->string('confirmacion_contrasennia');
            $table->boolean('activo')->default(0); // Añadir la columna 'activo'
            $table->integer('id_rol')->default(6); // Añadir la columna 'id_rol'
            $table->timestamps(); // Crea los campos created_at y updated_at
        });

    }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('usuario');
        }

};
