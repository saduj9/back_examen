<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_division',45);
            $table->integer('colaboradores',false);
            $table->integer('nivel',false);
            $table->string('embajador');
            $table->text('descripcion');
            $table->bigInteger('divisionsup_id')->unsigned()->nullable();            
            $table->foreign('divisionsup_id')->references('id')->on('divisionsuperior');
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
        Schema::dropIfExists('division');
    }
}
