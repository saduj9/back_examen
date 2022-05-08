<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubdivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdivision', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_subdivision',45);
            $table->text('descripcion');
            $table->bigInteger('division_id')->unsigned();            
            $table->foreign('division_id')->references('id')->on('division');
            $table->string('estado',1)->default("A");
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
        Schema::dropIfExists('subdivision');
    }
}
