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
        Schema::create('acreditados', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('id_persona')
                    ->unique();
            $table->foreign('id_persona')
                    ->references('id')
                    ->on('personas')
                    ->onDelete('cascade');
            $table->string('referencia',255);
            $table->string('edad',3);
            $table->unsignedBigInteger('id_departamento')
                    ->nullable();
            $table->foreign('id_departamento')
                    ->references('id')
                    ->on('departamentos')
                    ->onDelete('set null');
            $table->unsignedBigInteger('id_provincia')
                    ->nullable();
            $table->foreign('id_provincia')
                    ->references('id')
                    ->on('provincias')->onDelete('set null');
            $table->unsignedBigInteger('id_distrito')
                    ->nullable();
            $table->foreign('id_distrito')
                    ->references('id')
                    ->on('distritos')
                    ->onDelete('set null');
            $table->string('telefono',10);
            $table->string('celular',15);
            $table->string('correo',120);
            $table->unsignedBigInteger('id_parentesco')
                    ->unique()->nullable();
            $table->foreign('id_parentesco')
                    ->references('id')
                    ->on('parentescos')
                    ->onDelete('set null');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acreditados');
    }
};
