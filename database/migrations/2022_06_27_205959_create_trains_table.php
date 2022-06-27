<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->dateTime('departure_time', 20 );
            $table->dateTime('departure_station', 20 );
            $table->string('train_alphacode', 15);
            $table->tinyIntege('train_carriage');
            $table->boolean('in_time');
            $table->boolean('confirmed');
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
        Schema::dropIfExists('trains');
    }
}
