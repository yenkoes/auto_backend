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
        Schema::create('ielas', function (Blueprint $table) {
            $table->id();

            $table->integer('pilsetas_id')->unsigned();
            $table->foreign('pilsetas_id')->references('id')->on('pilsetas');

            $table->string('iela');

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
        Schema::dropIfExists('ielas');
    }
};
