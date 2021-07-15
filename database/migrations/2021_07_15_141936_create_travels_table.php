<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('surname', 30);
            $table->string('resident_in', 50);
            $table->string('province_of', 50);
            $table->string('postal_code', 5);
            $table->string('number_telephone', 15);
            $table->string('destination', 50);
            $table->string('name_hotel', 50);
            $table->dateTime('date_and_time', 6);
            $table->string('airport_name', 50);
            $table->unsignedTinyInteger('number_of_days');
            $table->unsignedTinyInteger('number_of_people');
            $table->float('price', 8, 2);
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
        Schema::dropIfExists('travels');
    }
}
