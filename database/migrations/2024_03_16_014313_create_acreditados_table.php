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
            $table->foreignId('id_persona')->constrained('personas')->onDelete('cascade');
            $table->string('referencia',255);
            $table->string('edad',3);
            $table->foreignId('id_departamento')->constrained('departamentos')->onDelete('set null');
            $table->foreignId('id_provincia')->constrained('provincias')->onDelete('set null');
            $table->foreignId('id_distrito')->constrained('distritos')->onDelete('set null');
            $table->string('telefono',10);
            $table->string('celular',15);
            $table->string('correo',120);
            $table->foreignId('id_parentesco')->constrained('parentescos')->onDelete('set null');
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
