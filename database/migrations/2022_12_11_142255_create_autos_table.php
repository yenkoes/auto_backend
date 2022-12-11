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
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('registracijas_nr');
            $table->string('apliecibas_nr');
            $table->string('vin');
            $table->string('tipa_aps_nr');

            $table->integer('modelis_id')->unsigned();
            $table->foreign('modelis_id')->references('id')->on('models');

            $table->integer('motors_id')->unsigned();
            $table->foreign('motors_id')->references('id')->on('motors');

            $table->integer('pilseta_id')->unsigned();
            $table->foreign('pilseta_id')->references('id')->on('pilsetas');

            $table->integer('iela_id')->unsigned();
            $table->foreign('iela_id')->references('id')->on('ielas');

            $table->integer('krasa_id')->unsigned();
            $table->foreign('krasa_id')->references('id')->on('krasas');

            $table->integer('veids_Id')->unsigned();
            $table->foreign('veids_Id')->references('id')->on('types');

            $table->string('piezimes');

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
        Schema::dropIfExists('autos');
    }
};
