<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->bigIncrements('id');
	    $table->integer('num');
            $table->float('difficulte');
            $table->string('nom');
            $table->boolean('envol');
            $table->boolean('accro')->nullable();
            $table->boolean('BI')->comment('Barre Inférieure');
            $table->boolean('BS')->comment('Barre Supérieure');

            $table->timestamps();


            $table->foreignId('agres_id')->constrained();

            $table->foreignId('famille_id')->constrained();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elements');
    }
}
