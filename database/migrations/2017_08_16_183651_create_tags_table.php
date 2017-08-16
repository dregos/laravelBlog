<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Schema::create('tags', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name')->unique();
        //     $table->timestamps();
        // });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('tag_id');
            $table->primary(['post_id', 'tag_id']);

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropForeign('post_user_id_foreign');
        Schema::dropForeign('post_tag_tag_id_foreign');
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('tags');
    }
}
