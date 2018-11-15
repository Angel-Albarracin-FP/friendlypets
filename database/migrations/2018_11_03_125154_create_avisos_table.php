<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avisos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_user')->unsigned();
            $table->integer('id_tipo_animal')->unsigned();
            $table->integer('id_localidad')->unsigned();
            $table->integer('id_imagen')->unsigned();
            $table->string('sexo');
            $table->text('description');
        });
        Schema::table('avisos', function (Blueprint $table) {
            $table->foreign('id_localidad')->references('id')->on('localidades');
            $table->foreign('id_imagen')->references('id')->on('imagenes');
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
        Schema::dropIfExists('avisos');
    }
}
