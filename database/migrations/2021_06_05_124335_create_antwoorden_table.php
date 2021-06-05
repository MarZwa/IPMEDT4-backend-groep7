<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntwoordenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antwoorden', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vraag-id');
            $table->foreign('vraag-id')->references('id')->on('vraag');
            $table->string('antwoord');
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
        Schema::dropIfExists('antwoorden');
    }
}
