<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("user_id")->nullable();
            $table->unsignedInteger("adv_type_id")->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('apartment_type_id')->nullable();
            $table->unsignedInteger('heating_type_id')->nullable();
            $table->string('name');
            $table->string('coordinates');
            $table->string('street');
            $table->string('description');
            $table->integer('roommates');
            $table->string('size');
            $table->string('price');
            $table->boolean('active');
            $table->timestamps();

            #Constraints
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("adv_type_id")->references("id")->on("advertisement_types")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("city_id")->references("id")->on("cities")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("apartment_type_id")->references("id")->on("apartment_types")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("heating_type_id")->references("id")->on("heating_types")->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}
