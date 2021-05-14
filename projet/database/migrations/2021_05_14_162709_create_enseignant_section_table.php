<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant_section', function (Blueprint $table) {
            $table->unsignedBigInteger('section_id')->primary();
            $table->foreign('section_id')
            ->references('id')
            ->on('sections')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('enseignants')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->boolean('isRs');
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
        Schema::dropIfExists('enseignant_section');
    }
}
