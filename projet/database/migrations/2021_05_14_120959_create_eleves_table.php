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
            $table->unsignedBigInteger('user_id')->primary();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->date('dateNaissanceEleve');
            $table->date('dateRentreeEleve');
            $table->integer('numAdrEleve');
            $table->string('villeAdrEleve');
            $table->string('libAdrEleve');
            $table->integer('codePostalAdrEleve');
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
