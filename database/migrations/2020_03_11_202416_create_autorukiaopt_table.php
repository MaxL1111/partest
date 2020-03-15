<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorukiaoptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorukiaopt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namekiaopt');
            $table->string('price');
            $table->string('year');
            $table->string('car_mileage');
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
        Schema::dropIfExists('autorukiaopt');
    }
}
