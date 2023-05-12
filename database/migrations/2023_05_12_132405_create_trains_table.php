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
            $table->string('company', 20);
            $table->string('started_station', 30);
            $table->timestamp('departed_hour')->nullable();
            $table->timestamp('arrival_hour');
            $table->unsignedInteger('code');
            $table->unsignedTinyInteger('wagons')->nullable();
            $table->string('delay', 20);
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
