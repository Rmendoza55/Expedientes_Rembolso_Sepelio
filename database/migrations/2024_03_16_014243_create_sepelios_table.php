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
            $table->unsignedBigInteger('id_distrito')
                    ->nullable();
            $table->foreign('id_distrito')
                    ->references('id')
                    ->on('distritos')
                    ->onDelete('set null');
            $table->string('fecha_presentacion',15);
            $table->unsignedBigInteger('id_ipress')
                    ->nullable();
            $table->foreign('id_ipress')
                    ->references('id')
                    ->on('ipresses')
                    ->onDelete('set null');
            $table->unsignedBigInteger('id_acreditado')
                    ->nullable();
            $table->foreign('id_acreditado')
                    ->references('id')
                    ->on('acreditados')
                    ->onDelete('set null');
            $table->unsignedBigInteger('id_fallecido')
                    ->unique();
            $table->foreign('id_fallecido')
                    ->references('id')
                    ->on('fallecidos')
                    ->onDelete('cascade');
            $table->string('importe',10);
            $table->string('comprobante',20);
            $table->unsignedBigInteger('id_usuario')
                    ->nullable();
            $table->foreign('id_usuario')
                    ->references('id')
                    ->on('usuarios')
                    ->onDelete('set null');
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
