<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlergiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alergia', function (Blueprint $table) {
            $table->id("idAle");
            $table->unsignedBigInteger('idRsv');
            $table->foreign('idRsv')->references('idRsv')->on('reserva');
            $table->string("crustaceos");
            $table->string("gluten");
            $table->string("huevo");
            $table->string("lactosa");
            $table->string("vegano");
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
        Schema::dropIfExists('alergia');
    }
}
