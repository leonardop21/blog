<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRelaxe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relaxes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title',100);
            $table->string('author',50);
            $table->text('content');
            $table->string('img',250);
            $table->string('link',250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('relaxes');
    }
}
