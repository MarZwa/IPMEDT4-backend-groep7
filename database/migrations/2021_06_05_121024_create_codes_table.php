<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->string('code')->unique();
            $table->primary('code');
            $table->unsignedBigInteger('vragenlijst-id');
            $table->foreign('vragenlijst-id')->references('id')->on('vragenlijst');
            $table->boolean('used');
            $table->integer('questions_answered');
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
        

        Schema::dropIfExists('codes');
    }
}
