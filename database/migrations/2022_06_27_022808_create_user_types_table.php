<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->bigIncrements("typeCode")->unsigned();
            $table->string("typeName",100);
            $table->text("typeDescription")->nullable();
            $table->bigInteger("linkEntity")->unsigned()->nullable();
            $table->bigInteger("typeParent")->unsigned()->nullable();
            $table->integer("priority")->nullable();
            $table->boolean("active");
            $table->datetime("created");
            $table->dateTime("updated")->nullable();
            $table->bigInteger("createdBy")->unsigned();
            $table->bigInteger("updatedBy")->unsigned()->nullable();

            $table->foreign("createdBy","created_by_fk_code_users")->references("code")->on("users");
            $table->foreign("updatedBy","updated_by_fk_code_users")->references("code")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
}
