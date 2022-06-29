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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements("code")->unsigned();
            $table->string('login',100);
            $table->string('password',100);
            $table->string("name",100);
            $table->string("lastname",100);
            $table->string('email',100)->unique("unique_email");
            $table->text("address")->nullable();
            $table->boolean("active");
            $table->dateTime("lastAccess")->nullable();
            $table->string("lastSession",255)->nullable();
            $table->dateTime("created");
            $table->datetime("updated")->nullable();
            $table->bigInteger("createdBy")->unsigned()->nullable();
            $table->bigInteger("updatedBy")->unsigned()->nullable();
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
