<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('create_tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('create_ticket');

            $table->integer('id_ticket')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
