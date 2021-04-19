<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSortieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sortie', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mode');
            $table->integer('type_id');
            $table->string('date');
            $table->string('client');
            $table->integer('montant_total');
            $table->integer('montant_paye');
            $table->integer('montant_due');
            $table->integer('vendu_par');
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
        Schema::drop('sortie');
    }
}
