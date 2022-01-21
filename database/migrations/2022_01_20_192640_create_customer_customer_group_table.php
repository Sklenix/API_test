<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCustomerGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_customer_group', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('customer_customer_group_id');
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('customer_group_id')->unsigned();
            $table->unique(['customer_id', 'customer_group_id']);
        });

        Schema::table('customer_customer_group', function($table) {
            $table->foreign('customer_id')->references('customer_id')->on('customer')->onDelete('cascade');
            $table->foreign('customer_group_id')->references('customer_group_id')->on('customer_group')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_customer_group');
    }
}
