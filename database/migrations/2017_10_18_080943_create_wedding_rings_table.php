<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingRingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_rings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stock');
            $table->string('name');
            $table->string('description');
            $table->string('metal')->default('18k');
            $table->string('style')->default('1');
            $table->boolean('sideStone')->default(false);
            $table->string('cover')->nullable();
            $table->string('image1')->nullable();
            $table->string('video')->nullable();
            $table->integer('unit_price');
            $table->integer('unit_price1');
            $table->boolean('published')->default(false);
            $table->boolean('customized')->default(false);
            $table->string('gender')->default(true);
            $table->integer('page_id')->unsigned()->nullable();
            $table->integer('wedding_ring_pair_id')->unsigned()->nullable();
        });

        Schema::create('invoice_wedding_ring', function (Blueprint $table) {
            $table->integer('invoice_id');
            $table->integer('wedding_ring_id');            
            $table->primary(['invoice_id','wedding_ring_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedding_rings');
        Schema::dropIfExists('invoice_wedding_ring');
    }
}
