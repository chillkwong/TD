<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvDiamondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_diamonds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoice_id')->unsigned()->nullable();
            $table->string('stock');
            $table->bigInteger('certificate');
            $table->string('shape');
            $table->string('weight');
            $table->string('color');
            $table->string('clarity');
            $table->string('cut')->nullable();
            $table->string('polish');
            $table->string('symmetry');
            $table->string('fluroscence');
            $table->integer('price');
            $table->string('lab')->default('gia');
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
        Schema::dropIfExists('inv_diamonds');
    }
}
