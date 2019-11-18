<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no');
            $table->string('doc_name');
            $table->string('subject_area');
            $table->string('subject');
            $table->string('education');
            $table->string('length');
            $table->string('delivery');
            $table->text('title')->nullable();
            $table->text('instructions')->nullable();
            $table->text('focus')->nullable();
            $table->text('structure')->nullable();
            $table->string('reference')->nullable();
            $table->string('number')->nullable();
            $table->text('suggested')->nullable();
            $table->text('essential')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
