<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReseñaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseña', function (Blueprint $table) {
            $table->id('idRsn');
            $table->unsignedBigInteger('idUsu');
            $table->foreign('idUsu')->references('idUsu')->on('users');
            $table->text('comentario');
            $table->integer('puntuacion');
            $table->date('fechaReseña');
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
        Schema::dropIfExists('reseña');
    }
}
