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
        Schema::disableForeignKeyConstraints();
        Schema::create('enseignant_section', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')
            ->references('id')
            ->on('sections')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('enseignant_id');
            $table->foreign('enseignant_id')
            ->references('id')
            ->on('enseignants')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->boolean('isRs')->default(0);
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
