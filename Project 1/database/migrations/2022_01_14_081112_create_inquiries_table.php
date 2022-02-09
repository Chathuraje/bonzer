<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('customerId');
            $table->string('customerName');
            $table->string('email');
            $table->string('contactNo');
            $table->string('inquiryTitle');
            $table->string('inquiryType');
            $table->string('inquirySource');
            $table->string('tripType');
            $table->string('bookkingForSource');
            $table->string('startDate');
            $table->string('followupDate');
            $table->string('duration');
            $table->string('adults');
            $table->string('child');
            $table->string('infants');
            $table->string('budget');
            $table->string('status');
            $table->string('other')->nullable();
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
        Schema::dropIfExists('inquiries');
    }
}
