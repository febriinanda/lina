<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOutletter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outletter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from_who', 250);
            $table->string('to_who', 250);
            $table->string('letter_number', 100)->unique();
            $table->string('key_number', 6)->unique();
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
        Schema::drop('outletter');
    }
}
