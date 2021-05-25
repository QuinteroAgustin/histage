<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nomUser');
            $table->string('prenomUser');
            $table->string('emailUser')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('passwordUser');
            $table->string('telephoneUser')->nullable();
            $table->string('mobileUser')->nullable();
            $table->string('titreUser');

            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')
            ->references('id')
            ->on('roles')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
