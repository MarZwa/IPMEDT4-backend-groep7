<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailadressenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailadressen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mailgroep-id');
            $table->foreign('mailgroep-id')->references('id')->on('mailgroep');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emailadressen');
    }
}
