<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('id_edad');
            $table->integer('id_color');
            $table->integer('id_azucar');
            $table->integer('id_gradoAl');
            $table->string('img');
            $table->rememberToken();
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
        Schema::dropIfExists('vinos');
    }
}
