<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_localidad')->references('id')->on('localidades');
            $table->foreign('id_imagen')->references('id')->on('imagenes');
        });
        Schema::table('avisos', function (Blueprint $table) {
            $table->foreign('id_localidad')->references('id')->on('localidades');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_tipo_animal')->references('id')->on('tipos_animal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
