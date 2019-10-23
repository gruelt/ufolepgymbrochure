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
            $table->float('difficulte');
            $table->string('nom');
            $table->boolean('envol');
            $table->boolean('accro');
            $table->boolean('BI')->comment('Barre Inférieure');
            $table->boolean('BS')->comment('Barre Supérieure');
            $table->integer('famille_id')->unsigned();
            $table->integer('agres_id')->unsigned();
            $table->timestamps();


            $table->foreign('agres_id')->references('id')->on('agres')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('famille_id')->references('id')->on('familles')
                ->onDelete('restrict')
                ->onUpdate('restrict');


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
