<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_characteristics_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("characteristic_id")->nullable();
            $table->unsignedInteger("advertisement_id")->nullable();
            $table->timestamps();

            #Constraints
            $table->foreign("characteristic_id")->references("id")->on("characteristics")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("advertisement_id")->references("id")->on("advertisements")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisement_characteristics_pivot');
    }
}
