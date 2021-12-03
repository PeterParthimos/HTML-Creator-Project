<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations
     * 
     * @return void
     */
    public function up() 
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->id('responseID');
            $table->string('resFile');
            //$table->foreign('requestID')->references('requestID')->on('requests');
        });
    }

    /**
     * Reverse the migrations
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}