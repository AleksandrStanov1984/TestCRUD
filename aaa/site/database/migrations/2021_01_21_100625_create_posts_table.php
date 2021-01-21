<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->unsignedInteger('phone_number');
            $table->string('job');
            $table->dateTime('birthday');
            $table->string('address');
            $table->unsignedInteger('userId')
            $table->string('gender');
            $table->boolean('married');
            $table->timestamp('creat_at')->nullable();
            $table->timestamp('update_at')->nullable();

            $table->foreign()
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
