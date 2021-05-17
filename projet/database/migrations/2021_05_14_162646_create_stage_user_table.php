<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('stage_user', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('stage_id')->index();
            $table->foreign('stage_id')
            ->references('id')
            ->on('stages')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('stage_user');
    }
}
