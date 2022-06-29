<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sessions', function (Blueprint $table) {
            $table->string("code",300);
            $table->bigInteger("userCode")->unsigned();
            $table->boolean("active");
            $table->string("origin",50)->nullable();
            $table->dateTime("created");
            $table->time("sessionLifeTime")->nullable();
            $table->dateTime("destroyed")->nullable();
            $table->primary(["code","userCode"],"pk_users_sessions");
            $table->foreign("userCode","users_fk_user_sessions")->references("code")->on("users")->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_sessions');
    }
}
