<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarEnginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_engines', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('model_id');
            $table->string('engine_name');
            $table->timestamps();
            $table->foreign('model_id')
                ->references('id')
                ->on('car_models')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_engines');
    }
}
