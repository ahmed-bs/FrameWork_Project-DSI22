<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaniersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nbrArticle');
            $table->integer('totalPrix');
            $table->integer('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('produits_id')->unsigned();
            $table->foreign('produits_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('paniers');
    }
}
