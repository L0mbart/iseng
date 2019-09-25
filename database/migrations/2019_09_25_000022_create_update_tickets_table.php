<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('update_tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('update_ticket');

            $table->string('nomor_ticket');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
