<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatOcupacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_ocupacion', function (Blueprint $table) {
            $table->increments('id_ocupacion');
            $table->string('descripcion');
            $table->string('segmento');
            $table->integer('orden');
            $table->boolean("estatus");
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
        Schema::drop('cat_ocupacion');
    }
}
