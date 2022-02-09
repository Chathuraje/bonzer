<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItinerarieDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerarie_data', function (Blueprint $table) {
            $table->id();
            
            $table->string('itinerarieId')->nullable();
            $table->string('itinerarieType')->nullable();
            $table->string('itinerarieTypeId')->nullable();
            $table->string('itinerarieDay')->nullable();

            $table->string('hotelName')->nullable();
            $table->string('hotelAddress')->nullable();
            $table->string('hotelNoOfNights')->nullable();
            $table->string('hotelStarRating')->nullable();
            $table->string('hotelRooms')->nullable();
            $table->string('hotelAdults')->nullable();
            $table->string('hotelChildren')->nullable();
            $table->string('hotelInfant')->nullable();
            $table->string('hotelRoomType')->nullable();
            $table->string('hotelMealType')->nullable();
            $table->string('hotelVendor')->nullable();
            $table->string('hotelPrice')->nullable();
            $table->string('hotelDescription')->nullable();

            
            $table->string('flightType')->nullable();
            $table->string('flightFrom')->nullable();
            $table->string('flightTo')->nullable(); 
            $table->string('flightVendor')->nullable();
            $table->string('flightPrice')->nullable();
            $table->string('flightAdults')->nullable();
            $table->string('flightChild')->nullable();
            $table->string('flightInfants')->nullable();

            $table->string('flightDepDepartDay')->nullable();
            $table->string('flightDepDepartTime')->nullable();
            $table->string('flightDepArrivalDay')->nullable();
            $table->string('flightDepArrivalTime')->nullable();
            $table->string('flightDepAirlineName')->nullable();
            $table->string('flightDepFlightNo')->nullable();
            $table->string('flightDepClass')->nullable();
            $table->string('flightDepDuration')->nullable();
            $table->string('flightDepStops')->nullable();

            $table->char('flightRetDepartDay', 10)->nullable();
            $table->char('flightRetDepartTime', 10)->nullable();
            $table->char('flightRetArrivalDay', 10)->nullable();
            $table->char('flightRetArrivalTime', 10)->nullable();
            $table->char('flightRetAirlineName', 100)->nullable();
            $table->char('flightRetFlightNo', 10)->nullable();
            $table->char('flightRetClass', 10)->nullable();
            $table->char('flightRetDuration', 10)->nullable();
            $table->char('flightRetStops', 10)->nullable();
            
           
            $table->string('flightDescription')->nullable();


            $table->string('activitiesName')->nullable();
            $table->string('activitiesAddress')->nullable();
            $table->string('activitiesDuration')->nullable();
            $table->string('activitiesNoOfGuests')->nullable();
            $table->string('activitiesActivityType')->nullable();
            $table->string('activitiesVendor')->nullable();
            $table->string('activitiesPrice')->nullable();
            $table->string('activitiesDescription')->nullable();


            $table->string('transferPickupLocation')->nullable();
            $table->string('transfeDropLocationr')->nullable();
            $table->string('transferPickupTime')->nullable();
            $table->string('transferVehicleType')->nullable();
            $table->string('transferNoOfGuests')->nullable();
            $table->string('transferVendor')->nullable();
            $table->string('transferPrice')->nullable();
            $table->string('transferDescription')->nullable();

            
            $table->string('customLocation')->nullable();
            $table->string('customItemName')->nullable();
            $table->string('customItemType')->nullable();
            $table->string('customVendor')->nullable();
            $table->string('customPrice')->nullable();
            $table->string('customDescription')->nullable();

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
        Schema::dropIfExists('itinerarie_data');
    }
}
