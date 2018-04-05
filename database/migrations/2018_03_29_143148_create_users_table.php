<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger("gender_type_id")->nullable();
            $table->enum('role', ['isAdmin', 'isModerator','isUser']);
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->integer('years');
            $table->string('city');
            $table->string('phone');
            $table->string('description');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('password');
            $table->string('image');
            $table->timestamps();

            #Constraints
            $table->foreign("gender_type_id")->references("id")->on("gender_types")->onDelete("cascade")->onUpdate("cascade");
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
