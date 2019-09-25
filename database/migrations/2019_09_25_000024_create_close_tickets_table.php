<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCloseTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('close_tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('close_ticket')->nullable();

            $table->string('closeticket')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
