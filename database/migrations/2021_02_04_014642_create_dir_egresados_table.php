<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirEgresadosTable extends Migration
{
    public function up()
    {
        Schema::create('dir_egresados', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('email');
            $table->string('carrera');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dir_egresados');
    }
}
