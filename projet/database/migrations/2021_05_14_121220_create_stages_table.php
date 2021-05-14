<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('titreStage');
            $table->string('descriptifStage');
            $table->date('dateDebutStage');
            $table->date('dateFinStage');
            $table->integer('dureeHebdoStage');
            $table->date('dateEvalStage');
            $table->string('commentaireEvalStage');

            $table->unsignedBigInteger('anneescolaire_id');
            $table->foreign('anneescolaire_id')
            ->references('id')
            ->on('anneescolaires')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('entreprise_id');
            $table->foreign('entreprise_id')
            ->references('id')
            ->on('entreprises')
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
        Schema::dropIfExists('stages');
    }
}
