<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->id('customer_id');
                $table->string('customer_name')->nullable();
                $table->string('customer_surname')->nullable();
                $table->string('customer_phone')->nullable();
                $table->string('customer_email')->unique();
                $table->string('customer_position')->nullable();
                $table->string('customer_note')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
