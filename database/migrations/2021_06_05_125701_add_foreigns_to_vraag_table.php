<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignsToVraagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vraag', function (Blueprint $table) {
            $table->unsignedBigInteger('vraagsoort');
            $table->foreign('vraagsoort')->references('id')->on('vraagsoorten');
            $table->unsignedBigInteger('categorie');
            $table->foreign('categorie')->references('id')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        

        Schema::table('vraag', function (Blueprint $table) {
            //
        });
    }
}
