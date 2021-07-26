<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company')->nullable();
            $table->string('vat_number');
            $table->string('website');
            $table->string('phone');
            $table->string('email');
            $table->string('pincode');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('billing_street');
            $table->string('billing_city');
            $table->string('billing_state');
            $table->string('billing_pincode');
            $table->string('billing_country');
             $table->string('shipping_street');
            $table->string('shipping_city');
            $table->string('shipping_state');
            $table->string('shipping_pincode');
            $table->string('shipping_country');







        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
