<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('eleves', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->foreign('id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->date('dateNaissanceEleve')->nullable();
            $table->date('dateRentreeEleve')->nullable();
            $table->integer('numAdrEleve')->nullable();
            $table->string('villeAdrEleve')->nullable();
            $table->string('libAdrEleve')->nullable();
            $table->integer('codePostalAdrEleve')->nullable();
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')
            ->references('id')
            ->on('sections')
            ->onDelete('restrict')
            ->onUpdate('restrict');
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
        Schema::dropIfExists('eleves');
    }
}
