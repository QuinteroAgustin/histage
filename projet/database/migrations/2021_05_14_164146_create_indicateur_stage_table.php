<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicateurStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicateur_stage', function (Blueprint $table) {
            $table->unsignedBigInteger('typeindicateur_id');
            $table->foreign('typeindicateur_id')
            ->references('id')
            ->on('typeindicateurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('indicateur_id');
            $table->foreign('indicateur_id')
            ->references('id')
            ->on('indicateurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->primary(['indicateur_id', 'typeindicateur_id']);

            $table->unsignedBigInteger('stage_id');
            $table->foreign('stage_id')
            ->references('id')
            ->on('stages')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->boolean('repCategorieIndicateur');
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
        Schema::dropIfExists('indicateur_stage');
    }
}
