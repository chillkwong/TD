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
            $table->string('type');
            $table->string('name');
            $table->string('description');
            $table->string('sideStone')->default(false);
            $table->float('ct')->default(0);
            $table->string('cover')->nullable();
            $table->string('image1')->nullable();
            $table->string('video')->nullable();
            $table->integer('unit_price');
            $table->boolean('published')->default(false);
            $table->timestamps();
        });

        Schema::create('invoice_jewellry', function (Blueprint $table) {
            $table->integer('invoice_id');
            $table->integer('jewellry_id');            
            $table->primary(['invoice_id','jewellry_id']);
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
        Schema::dropIfExists('invoice_jewellry');
    }
}
