<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('company', 60);
            $table->string('departure_station', 60);
            $table->string('arrival_station', 60);
            $table->dateTimeTz('departure_time');
            $table->dateTimeTz('arrival_time');
            $table->string('train_code', 10);
            $table->unsignedTinyInteger('wagons_number')->nullable();
            $table->string('on_time', 20)->nullable();
            $table->string('cancelled', 10)->nullable(); 
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
};
