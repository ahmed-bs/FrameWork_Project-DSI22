<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_commande');
            $table->integer('num_commande');
            $table->date('livraison_commande');
            $table->float('total_commande');
            $table->float('prix_commande');
            $table->float('description_commande');
            $table->integer('paniers_id')->unsigned();
            $table->timestamps();
            $table->foreign('paniers_id')->references('id')->on('paniers')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
