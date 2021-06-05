<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVragenlijstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vragenlijst', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eigenaar-id');
            $table->foreign('eigenaar-id')->references('id')->on('users');
            $table->string('name');
            $table->string('link');
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
       

        Schema::dropIfExists('vragenlijst');
    }
}
