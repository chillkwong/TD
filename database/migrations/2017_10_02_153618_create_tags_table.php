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
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale');
            $table->text('content'); 
            $table->timestamps();
        });

        Schema::create('inv_post_tag', function (Blueprint $table) {
            $table->integer('inv_post_id');
            $table->integer('tag_id');            
            $table->primary(['inv_post_id','tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('inv_post_tag');
    }
}
