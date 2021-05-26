<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('indicateurs', function (Blueprint $table) {
            $table->id();
            $table->string('libIndicateur');
            
            $table->unsignedBigInteger('typeindicateur_id');
            $table->foreign('typeindicateur_id')
            ->references('id')
            ->on('typeindicateurs')
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('indicateurs');
    }
}
