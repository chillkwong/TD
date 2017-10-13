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
            $table->bigInteger('price');
            $table->string('shape');
            $table->string('weight');
            $table->string('color');
            $table->string('clarity');
            $table->string('cut')->nullable();
            $table->string('polish');
            $table->string('symmetry');
            $table->string('fluroscence');
            $table->bigInteger('certificate'); 
            $table->string('lab')->defult('gia');           
            $table->string('stock');
            $table->integer('supplier_id')->unsigned()->nullable();
            $table->string('location')->default('hk');
            $table->text('imageLink')->nullable();
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
