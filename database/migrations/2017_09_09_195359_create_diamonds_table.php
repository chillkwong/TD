<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiamondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diamonds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned()->nullable();
            $table->string('stock');
            $table->bigInteger('certificate');
            $table->string('shape');
            $table->string('weight');
            $table->string('color');
            $table->string('clarity');
            $table->string('cut');
            $table->string('polish');
            $table->string('symmetry');
            $table->string('fluroscence');
            $table->string('lab');
            $table->integer('price');
            $table->string('location');
            $table->text('iamgeLink');
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
        Schema::dropIfExists('diamonds');
    }
}
