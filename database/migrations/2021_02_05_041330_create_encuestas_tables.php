<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion1_egresado', function (Blueprint $table) {
            $table->primary('matricula');
            $table->string('matricula');
            $table->string('nombre');
            $table->date('fechaNac');
            $table->string('curp');
            $table->string('sexo');
            $table->string('edoCivil');
            $table->string('domicilio');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('telefono');
            $table->string('email');
            $table->string('telPaterno')->nullable();
            $table->string('carrera');
            $table->string('especialidad');
            $table->string('mesEgreso');
            $table->string('anioEgreso');
            $table->string('titulado');
            $table->string('idiomaIngles');
            $table->string('idiomaOtro')->nullable();
            $table->string('paquetesComp')->nullable();
            $table->timestamps();
        });

        Schema::create('seccion2', function (Blueprint $table) {
            $table->primary('id_egresado');
            $table->string('id_egresado');
            $table->string('II-1');
            $table->string('II-2');
            $table->string('II-3');
            $table->string('II-4');
            $table->string('II-5');
            $table->string('II-6');
            $table->string('II-7');
            $table->timestamps();

            $table->foreign('id_egresado')
                ->references('matricula')
                ->on('seccion1_egresado')
                ->onDelete('cascade');
        });
        Schema::create('seccion3', function (Blueprint $table) {
            $table->primary('id_egresado');
            $table->string('id_egresado');
            $table->string('III-1-1');
            $table->string('III-1-2')->nullable();
            $table->string('III-1-3')->nullable();
            $table->string('III-2')->nullable();
            $table->string('III-3')->nullable();
            $table->string('III-4')->nullable();
            $table->string('III-5')->nullable();
            $table->string('III-6-1')->nullable();
            $table->string('III-6-2')->nullable();
            $table->string('III-6-3')->nullable();
            $table->string('III-6-4')->nullable();
            $table->string('III-7-1')->nullable();
            $table->string('III-7-2')->nullable();
            $table->string('III-8')->nullable();
            $table->string('III-9')->nullable();
            $table->string('III-10')->nullable();
            $table->string('III-11')->nullable();
            $table->string('III-12-1')->nullable();
            $table->string('III-12-2')->nullable();
            $table->string('III-12-3')->nullable();
            $table->string('III-12-4')->nullable();
            $table->string('III-12-5')->nullable();
            $table->string('III-12-6')->nullable();
            $table->string('III-12-7')->nullable();
            $table->string('III-12-8')->nullable();
            $table->string('III-12-9')->nullable();
            $table->string('III-12-10')->nullable();
            $table->string('III-12-11')->nullable();
            $table->string('III-13')->nullable();
            $table->string('III-14')->nullable();
            $table->timestamps();

            $table->foreign('id_egresado')
                ->references('matricula')
                ->on('seccion1_egresado')
                ->onDelete('cascade');
        });
        Schema::create('seccion4', function (Blueprint $table) {
            $table->primary('id_egresado')->nullable();
            $table->string('id_egresado')->nullable();
            $table->string('IV-1')->nullable();
            $table->string('IV-2')->nullable();
            $table->string('IV-3')->nullable();
            $table->string('IV-4-1')->nullable();
            $table->string('IV-4-2')->nullable();
            $table->string('IV-4-3')->nullable();
            $table->string('IV-4-4')->nullable();
            $table->string('IV-4-5')->nullable();
            $table->string('IV-4-6')->nullable();
            $table->string('IV-4-7')->nullable();
            $table->string('IV-4-8')->nullable();
            $table->string('IV-4-9')->nullable();
            $table->string('IV-4-10')->nullable();
            $table->timestamps();

            $table->foreign('id_egresado')
                ->references('matricula')
                ->on('seccion1_egresado')
                ->onDelete('cascade');
        });
        Schema::create('seccion5', function (Blueprint $table) {
            $table->primary('id_egresado');
            $table->string('id_egresado');
            $table->string('V-1-1');
            $table->string('V-1-2');
            $table->timestamps();

            $table->foreign('id_egresado')
                ->references('matricula')
                ->on('seccion1_egresado')
                ->onDelete('cascade');
        });
        Schema::create('seccion6', function (Blueprint $table) {
            $table->primary('id_egresado');
            $table->string('id_egresado');
            $table->string('VI-1');
            $table->string('VI-2');
            $table->string('VI-3');
            $table->timestamps();

            $table->foreign('id_egresado')
                ->references('matricula')
                ->on('seccion1_egresado')
                ->onDelete('cascade');
        });
        Schema::create('seccion7', function (Blueprint $table) {
            $table->primary('id_egresado');
            $table->string('id_egresado');
            $table->string('VII-1')->nullable();
            $table->timestamps();

            $table->foreign('id_egresado')
                ->references('matricula')
                ->on('seccion1_egresado')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seccion7');
        Schema::dropIfExists('seccion6');
        Schema::dropIfExists('seccion5');
        Schema::dropIfExists('seccion4');
        Schema::dropIfExists('seccion3');
        Schema::dropIfExists('seccion2');
        Schema::dropIfExists('seccion1_egresado');
    }
}
