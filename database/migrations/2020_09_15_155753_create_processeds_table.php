<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processeds', function (Blueprint $table) {
            $table->id();
            $table->integer('counter_id');
            $table->string('name');
            $table->string('size');
            $table->integer('carton')->nullable();
            $table->integer('pieces')->nullable();
            $table->integer('carton_price')->nullable();
            $table->integer('pieces_price')->nullable();
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('processeds');
    }
}
