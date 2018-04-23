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
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->integer('years');
            $table->string('phone');
            $table->string('description');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('password');
            $table->string('image');
            $table->timestamps();

            #Constraints
            $table->foreign("gender_type_id")->references("id")->on("gender_types")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("role_id")->references("id")->on("roles")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("city_id")->references("id")->on("cities")->onDelete("cascade")->onUpdate("cascade");
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
