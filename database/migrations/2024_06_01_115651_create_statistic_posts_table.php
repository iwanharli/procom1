<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistic_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreignId('categories_id');
            $table->string('post_title');
            $table->string('post_teaser');
            $table->text('post_content');
            $table->string('slug')->unique();
            $table->jsonb('json_data');
            $table->string('chart_type')->default('bar');
            $table->string('post_status');
            $table->string('post_image');
            $table->text('post_image_description');
            $table->timestamp('published_at');
            $table->timestamps();

            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistic_posts');
    }
}
