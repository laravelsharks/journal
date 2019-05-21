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
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('author');
            $table->string('image');
            $table->number('rank');
            $table->string('category');
            $table->timestamps('created');
            
        });
    }

    'title' => $faker->title,
    'content' => $faker->realText($maxNbChars = 200),
    'author' => $faker->email,
    'image' => $faker->imageUrl($width = 640, $height = 480, 'food'),
    'rank' => str_random(3),
    'category' => $faker->foodName(),
    'created' => timestamps(),

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
