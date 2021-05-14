<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            
            $table->string('statusContact', 1);
            $table->string('fonctionContact');
            
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
        Schema::dropIfExists('contacts');
    }
}
