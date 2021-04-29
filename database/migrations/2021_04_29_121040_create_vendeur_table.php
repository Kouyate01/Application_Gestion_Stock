<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vendeur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_vendeur');
            $table->string('email_vendeur');
            $table->string('téléphone_vendeur');
            $table->text('address_vendeur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('vendeur');
    }
}
