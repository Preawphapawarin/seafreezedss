<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateY2014sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('y2014s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('OrderDate');
            $table->String('NameSeafood');
            $table->integer('Decision');
            $table->integer('Order');
            $table->integer('Stock');
            $table->integer('Cost');
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
        Schema::dropIfExists('y2014s');
    }
}
