<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVraagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vraag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vragenlijst-id');
            $table->foreign('vragenlijst-id')->references('id')->on('vragenlijst');
            $table->string('vraag');
            
            $table->string('opties');
            
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
        Schema::table('vraag', function( Blueprint $table ){
            $table->dropForeign('vraag_vraagsoort_foreign');
            $table->dropForeign('vraag_categorie_foreign');
        });

        Schema::dropIfExists('vraag');
    }
}
