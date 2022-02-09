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
            $table->string('email');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('birthDate')->nullable();
            $table->string('branch');
            $table->string('mobileNumber');
            $table->string('country');
            $table->string('city');
            $table->string('address')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('documentType');
            $table->string('docNumber');
            $table->string('expireDate');
            $table->string('nationalioty');
            $table->string('isuuingCountry');
            $table->string('others')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
