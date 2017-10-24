<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngagementRingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engagement_rings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stock');
            $table->string('name');
            $table->string('description');
            $table->string('prong')->default('4-prong');
            $table->string('shoulder')->default('tapering');
            $table->string('style')->default('solitaire');
            $table->integer('sideStone')->default(false);
            $table->string('cover')->nullable();
            $table->string('image1')->nullable();
            $table->string('video')->nullable();
            $table->integer('unit_price');
            $table->boolean('published')->default(false);
            $table->boolean('customized')->default(false);
            $table->integer('page_id')->unsigned()->nullable();
        });


        Schema::create('invoice_engagement_ring', function (Blueprint $table) {
            $table->integer('invoice_id');
            $table->integer('engagement_ring_id');            
            $table->primary(['invoice_id','engagement_ring_id']);
        });


        Schema::create('engagement_ring_invoice', function (Blueprint $table) {
            $table->integer('invoice_id');
            $table->integer('engagement_ring_id');            
            $table->primary(['invoice_id','engagement_ring_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engagement_rings');
        Schema::dropIfExists('invoice_engagement_ring');
        Schema::dropIfExists('engagement_ring_invoice');
    }
}
