<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations
     * 
     * @return void
     */
    public function up() 
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('clientID');
            $table->string('authKey');
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