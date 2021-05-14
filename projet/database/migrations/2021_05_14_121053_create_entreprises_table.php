<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nomEntreprise');
            $table->string('serviceEntreprise');
            $table->string('missionEntreprise');
            $table->integer('numAdrEntreprise');
            $table->string('libAdrEntreprise');
            $table->integer('codePostalEntreprise');
            $table->string('villeEntreprise');
            $table->string('telephoneEntreprise');
            $table->string('mailEntreprise');
            $table->string('siretEntreprise');
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
        Schema::dropIfExists('entreprises');
    }
}
