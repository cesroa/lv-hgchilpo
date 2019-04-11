<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('DB_MYSQL')->create('grids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('expediente', 10);
            $table->string('nombrepaciente', 100);
            $table->string('estatuspaciente', 20);
            $table->string('fechalista', 100);
            $table->string('usuarioarchivo', 100);
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
        Schema::connection('DB_MYSQL')->dropIfExists('grids');
    }
}
