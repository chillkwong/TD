<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qty');
            $table->string('name');
            $table->string('description');            
            $table->integer('unit_price');
            $table->timestamps();
        });

        Schema::create('invoice_item', function (Blueprint $table) {
            $table->integer('invoice_id');
            $table->integer('item_id');
            $table->primary(['invoice_id','item_id']);
        });

        Schema::create('supplier_item', function (Blueprint $table) {
            $table->integer('supplier_id');
            $table->integer('item_id');
            $table->primary(['supplier_id','item_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
        Schema::dropIfExists('invoice_item');
        Schema::dropIfExists('supplier_item');

    }
}
