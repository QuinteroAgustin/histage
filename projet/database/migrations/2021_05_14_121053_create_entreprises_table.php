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
            $table->string('nomEntreprise')->nullable();
            $table->string('serviceEntreprise')->nullable();
            $table->string('missionEntreprise')->nullable();
            $table->integer('numAdrEntreprise')->nullable();
            $table->string('libAdrEntreprise')->nullable();
            $table->integer('codePostalEntreprise')->nullable();
            $table->string('villeEntreprise')->nullable();
            $table->string('telephoneEntreprise')->nullable();
            $table->string('mailEntreprise')->nullable();
            $table->string('siretEntreprise')->nullable();
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
