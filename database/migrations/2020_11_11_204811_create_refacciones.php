<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefacciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refaccions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('descripcion',100);
            $table->integer('num_piezas');
            $table->integer('costo_pieza');
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
        Schema::dropIfExists('refaccions');
    }
}
