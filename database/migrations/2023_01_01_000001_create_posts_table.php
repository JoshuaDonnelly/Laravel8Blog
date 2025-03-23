<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        try {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('content');
                $table->string('slug')->unique();
                $table->text('image_path')->nullable(); // Changed from string to text
                $table->unsignedBigInteger('user_id')->nullable();
                $table->timestamps();
            });
        } catch (\Exception $e) {
            dd($e->getMessage()); // Dump the error message for debugging
        }
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
