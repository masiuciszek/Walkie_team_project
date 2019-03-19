<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dog_id');
            $table->date('date');
            $table->tinyInteger('hour');

            $table->unsignedInteger('user_id');
            
            $table->timestamps();

            $table->unique(['dog_id', 'date', 'hour']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('walks');
    }
}
