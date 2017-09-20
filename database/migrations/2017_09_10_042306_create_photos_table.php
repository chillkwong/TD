<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alt');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('invoice_photo', function (Blueprint $table) {
            $table->string('invoice_id');
            $table->string('photo_id');
            $table->primary(['invoice_id','photo_id']);
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
        Schema::dropIfExists('photos');
        Schema::dropIfExists('invoice_photo');
    }
}
