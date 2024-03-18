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
        Schema::create('fallecidos', function (Blueprint $table) {
            
            $table->id();
            $table->string('fecha_fallecimiento',15);
            $table->unsignedBigInteger('id_persona')->unique()->nullable();
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('set null');
            $table->string('contrato',20);
            $table->unsignedBigInteger('id_departamento')->unique()->nullable();
            $table->foreign('id_departamento')->references('id')->on('departamentos')->onDelete('set null');
            $table->unsignedBigInteger('id_provincia')->unique()->nullable();
            $table->foreign('id_provincia')->references('id')->on('provincias')->onDelete('set null');
            $table->unsignedBigInteger('id_distrito')->unique()->nullable();
            $table->foreign('id_distrito')->references('id')->on('distritos')->onDelete('set null');
            $table->string('edad_fallecido',3);
            $table->string('lugar',255);
            $table->unsignedBigInteger('id_tipo_seguro')->unique()->nullable();
            $table->foreign('id_tipo_seguro')->references('id')->on('tipo__seguros')->onDelete('set null');
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
        Schema::dropIfExists('fallecidos');
    }
};
