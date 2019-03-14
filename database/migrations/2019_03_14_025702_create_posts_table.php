<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            //todo 7
            $table->integer('category_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->timestamps();

            //todo 9 php artisan make:model Comment -m

            //todo 11
            //$table->foreign('category_id')->references('id')->on('categories');

            //todo 13 php artisan migrate
            //todo 14 php artisan make:auth
            //todo 15 test browser
            //todo 16 php artisan make:controller PostController
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
