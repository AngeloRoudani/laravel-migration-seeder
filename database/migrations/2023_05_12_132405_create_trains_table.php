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
            $table->string('company', 50);
            $table->string('started_station', 50);
            $table->dateTimeTz('departed_hour');
            $table->dateTimeTz('arrival_hour');
            $table->unsignedInteger('code');
            $table->unsignedTinyInteger('wagons')->nullable();
            $table->string('delay', 20)->nullable();
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
