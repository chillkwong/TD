<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJewellriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jewellries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stock');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('item_jewellry', function (Blueprint $table) {
            $table->integer('item_id');
            $table->integer('jewellry_id');            
            $table->primary(['item_id','jewellry_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jewellries');
        Schema::dropIfExists('item_jewellry');
    }
}
