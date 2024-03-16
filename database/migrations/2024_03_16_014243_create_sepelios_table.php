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
        Schema::create('sepelios', function (Blueprint $table) {

            $table->id();
            $table->foreignId('id_distrito')->constrained('distritos')->onDelete('set null');
            $table->string('fecha_presentacion',15);
            $table->foreignId('id_ipress')->constrained('ipresses')->onDelete('cascade');
            $table->foreignId('id_acreditado')->constrained('acreditados')->onDelete('set null');
            $table->foreignId('id_fallecido')->constrained('fallecidos')->onDelete('cascade');
            $table->string('importe',10);
            $table->string('comprobante',20);
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->tinyInteger('estado')->default(1);
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
        Schema::dropIfExists('sepelios');
    }
};
