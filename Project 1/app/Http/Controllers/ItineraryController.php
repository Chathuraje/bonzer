<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itinerary;
use App\Models\Customer;
use App\Models\ItinerarieData;

class itineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itineraries = Itinerary::join('customers', 'itineraries.customerId', '=', 'customers.id')
        ->get(['itineraries.*', 'customers.firstName', 'customers.lastName', 'customers.email', 'customers.mobileNumber']);

        return view('admin.itinerary.itinerary')->with('itineraries', $itineraries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all("id", "firstName", "lastName", "email", "mobileNumber");
        return view('admin.itinerary.addnewitinerary', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $submitValue = $request->submitValue;
        echo $submitValue;
        
        if($submitValue == "Create") {
            // Form validation
            $this->validate($request, [
                'customerId' => 'required',
                'customerName' => 'required',
                'email' => 'required|email',
                'itineraryTitle'=>'required',
                'fromDate'=>'required',
                'toDate'=>'required',
                'duration'=>'required'
            ],
            [
                'email.required' => 'You have to choose the Customer First'
            ]);

            $itinerary = new Itinerary();

            $itinerary->customerId = $request->customerId;
            $itinerary->title = $request->itineraryTitle;
            $itinerary->fromDate = $request->fromDate;
            $itinerary->toDate = $request->toDate;
            $itinerary->duration = $request->duration;

            $itinerary->save();

            $Id = $itinerary->id;

            return redirect()->route('itinerary.show', $Id);
            
        } else if($submitValue == "addActivity") {
            // Form validation
            $this->validate($request, [
                'itinerarieId' => 'required',
                'activitiesName'=>'required',
                'activitiesAddress'=>'required',
                'activitiesItineraryDay'=>'required',
                'activitiesDuration'=>'required',
                'activitiesNoOfGuests'=>'required',
                'activitiesActivityType'=>'required',
                'activitiesVendor'=>'required',
                'activitiesPrice'=>'required'
            ]);

            $ItinerarieData = new ItinerarieData();

            $ItinerarieData->itinerarieId = $request->itinerarieId;
            $ItinerarieData->itinerarieType = "Activity";
            $ItinerarieData->itinerarieTypeId = "4";
            $ItinerarieData->activitiesName = $request->activitiesName;
            $ItinerarieData->activitiesAddress = $request->activitiesAddress;
            $ItinerarieData->itinerarieDay = $request->activitiesItineraryDay;
            $ItinerarieData->activitiesDuration = $request->activitiesDuration;
            $ItinerarieData->activitiesNoOfGuests = $request->activitiesNoOfGuests;
            $ItinerarieData->activitiesActivityType = $request->activitiesActivityType;
            $ItinerarieData->activitiesVendor = $request->activitiesVendor;
            $ItinerarieData->activitiesPrice = $request->activitiesPrice;
            $ItinerarieData->activitiesDescription = $request->activitiesDescription;

            $ItinerarieData->save();

            $Id = $request->itinerarieId;

            return redirect()->route('itinerary.show', $Id);


        } else if($submitValue == "addCustomItem") {
             // Form validation
             $this->validate($request, [
                'itinerarieId' => 'required',
                'customLocation'=>'required',
                'customItemName'=>'required',
                'customItineraryDay'=>'required',
                'customItemType'=>'required',
                'customVendor'=>'required',
                'customPrice'=>'required'
            ]);

            $ItinerarieData = new ItinerarieData();

            $ItinerarieData->itinerarieId = $request->itinerarieId;
            $ItinerarieData->itinerarieType = "Custom";
            $ItinerarieData->itinerarieTypeId = "3";
            $ItinerarieData->customLocation = $request->customLocation;
            $ItinerarieData->customLocation = $request->customLocation;
            $ItinerarieData->customItemName = $request->customItemName;
            $ItinerarieData->itinerarieDay = $request->customItineraryDay;
            $ItinerarieData->customItemType = $request->customItemType;
            $ItinerarieData->customVendor = $request->customVendor;
            $ItinerarieData->customPrice = $request->customPrice;
            $ItinerarieData->activitiesVendor = $request->activitiesVendor;
            $ItinerarieData->customDescription = $request->customDescription;

            $ItinerarieData->save();

            $Id = $request->itinerarieId;

            return redirect()->route('itinerary.show', $Id);

        } else if($submitValue == "addFlight") {

             // Form validation
             // Form validation
             $this->validate($request, [
                'itinerarieId' => 'required',

                'flightItineraryDay' => 'required',
                'flightType'=>'required',
                'flightFrom'=>'required',
                'flightTo'=>'required',
                'flightVendor'=>'required',
                'flightPrice'=>'required',
                'flightAdults'=>'required',
                'flightChild'=>'required',
                'flightInfants'=>'required',
                
                'flightDepDepartDay'=>'required',
                'flightDepDepartTime'=>'required',
                'flightDepArrivalDay'=>'required',
                'flightDepArrivalTime'=>'required',
                'flightDepAirlineName'=>'required',
                'flightDepFlightNo'=>'required',
                'flightDepClass'=>'required',
                'flightDepStops'=>'required',

                'flightRetDepartDay'=>'required',
                'flightRetDepartTime'=>'required',
                'flightRetArrivalDay'=>'required',
                'flightRetArrivalTime'=>'required',
                'flightRetAirlineName'=>'required',
                'flightRetFlightNo'=>'required',
                'flightRetClass'=>'required',
                'flightRetStops'=>'required'
            ]);

            $ItinerarieData = new ItinerarieData();

            $ItinerarieData->itinerarieId = $request->itinerarieId;
            $ItinerarieData->itinerarieType = "Flight";
            $ItinerarieData->itinerarieTypeId = "2";
            $ItinerarieData->itinerarieDay = $request->flightItineraryDay;

            $ItinerarieData->flightType = $request->flightType;
            $ItinerarieData->flightFrom = $request->flightFrom;
            $ItinerarieData->flightTo = $request->flightTo;
            $ItinerarieData->flightVendor = $request->flightVendor;
            $ItinerarieData->flightPrice = $request->flightPrice;
            $ItinerarieData->flightAdults = $request->flightAdults;
            $ItinerarieData->flightChild = $request->flightChild;
            $ItinerarieData->flightInfants = $request->flightInfants;

            $ItinerarieData->flightDepDepartDay = $request->flightDepDepartDay;
            $ItinerarieData->flightDepDepartTime = $request->flightDepDepartTime;
            $ItinerarieData->flightDepArrivalDay = $request->flightDepArrivalDay;
            $ItinerarieData->flightDepArrivalTime = $request->flightDepArrivalTime;
            $ItinerarieData->flightDepAirlineName = $request->flightDepAirlineName;
            $ItinerarieData->flightDepFlightNo = $request->flightDepFlightNo;
            $ItinerarieData->flightDepClass = $request->flightDepClass;
            $ItinerarieData->flightDepStops = $request->flightDepStops;

            
            $ItinerarieData->flightRetDepartDay = $request->flightRetDepartDay;
            $ItinerarieData->flightRetDepartTime = $request->flightRetDepartTime;
            $ItinerarieData->flightRetArrivalDay = $request->flightRetArrivalDay;
            $ItinerarieData->flightRetArrivalTime = $request->flightRetArrivalTime;
            $ItinerarieData->flightRetAirlineName = $request->flightRetAirlineName;
            $ItinerarieData->flightRetFlightNo = $request->flightRetFlightNo;
            $ItinerarieData->flightRetClass = $request->flightRetClass;
            $ItinerarieData->flightRetStops = $request->flightRetStops;
            

            $ItinerarieData->flightDescription = $request->flightDescription;

            $ItinerarieData->save();

            $Id = $request->itinerarieId;

            return redirect()->route('itinerary.show', $Id);
            
        } else if($submitValue == "addHotel") {
            
            // Form validation
            $this->validate($request, [
                'itinerarieId' => 'required',

                'hotelName'=>'required',
                'hotelAddress'=>'required',
                'hotelItinerarieDay'=>'required',
                'hotelNoOfNights'=>'required',
                'hotelStarRating'=>'required',
                'hotelRooms'=>'required',
                'hotelRoomType'=>'required',
                
                'hotelMealType'=>'required',
                'hotelVendor'=>'required',
                'hotelPrice'=>'required',
                'hotelAdults'=>'required',
                'hotelChildren'=>'required',
                'hotelInfant'=>'required',
            ]);

            $ItinerarieData = new ItinerarieData();

            $ItinerarieData->itinerarieId = $request->itinerarieId;
            $ItinerarieData->itinerarieType = "Hotel";
            $ItinerarieData->itinerarieTypeId = "1";

            $ItinerarieData->hotelName = $request->hotelName;
            $ItinerarieData->hotelAddress = $request->hotelAddress;
            $ItinerarieData->itinerarieDay = $request->hotelItinerarieDay;
            $ItinerarieData->hotelNoOfNights = $request->hotelNoOfNights;
            $ItinerarieData->hotelStarRating = $request->hotelStarRating;
            $ItinerarieData->hotelRooms = $request->hotelRooms;
            $ItinerarieData->hotelRoomType = $request->hotelRoomType;
            $ItinerarieData->hotelMealType = $request->hotelMealType;

            $ItinerarieData->hotelVendor = $request->hotelVendor;
            $ItinerarieData->hotelPrice = $request->hotelPrice;
            $ItinerarieData->hotelAdults = $request->hotelAdults;
            $ItinerarieData->hotelChildren = $request->hotelChildren;
            $ItinerarieData->hotelInfant = $request->hotelInfant;

            $ItinerarieData->save();

            $Id = $request->itinerarieId;

            return redirect()->route('itinerary.show', $Id);

        } else if($submitValue == "addTransfer") {
            
            // Form validation
            $this->validate($request, [
                'itinerarieId' => 'required',
                'transferPickupLocation' => 'required',
                'transfeDropLocationr' => 'required',
                'transferItineraryDay'=>'required',
                'transferPickupTime'=>'required',
                'transferVehicleType'=>'required',
                'transferNoOfGuests'=>'required',
                'transferVendor'=>'required',
                'transferPrice'=>'required'
            ]);

            $ItinerarieData = new ItinerarieData();

            $ItinerarieData->itinerarieId = $request->itinerarieId;
            $ItinerarieData->itinerarieType = "Transfer";
            $ItinerarieData->itinerarieTypeId = "5";
            $ItinerarieData->transferPickupLocation = $request->transferPickupLocation;
            $ItinerarieData->transfeDropLocationr = $request->transfeDropLocationr;
            $ItinerarieData->itinerarieDay = $request->transferItineraryDay;
            $ItinerarieData->transferPickupTime = $request->transferPickupTime;
            $ItinerarieData->transferVehicleType = $request->transferVehicleType;
            $ItinerarieData->transferNoOfGuests = $request->transferNoOfGuests;
            $ItinerarieData->transferVendor = $request->transferVendor;
            $ItinerarieData->transferPrice = $request->transferPrice;
            $ItinerarieData->transferDescription = $request->transferDescription;

            $ItinerarieData->save();

            $Id = $request->itinerarieId;

            return redirect()->route('itinerary.show', $Id);
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itineraries = Itinerary::join('customers', 'itineraries.customerId', '=', 'customers.id')
        ->where('itineraries.id', '=', $id)
        ->get(['itineraries.*', 'customers.firstName', 'customers.lastName'])
        ->first();

        $itineraryDetails = ItinerarieData::all()->where('itinerarieId', '=', $id);


        return view('admin.itinerary.itinerarydetails')
        ->with('itineraries', $itineraries)
        ->with('itineraryDetails', $itineraryDetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itineraries = Itinerary::join('customers', 'itineraries.customerId', '=', 'customers.id')
        ->where('itineraries.id', '=', $id)
        ->get(['itineraries.*', 'customers.firstName', 'customers.lastName', 'customers.email', 'customers.mobileNumber'])
        ->first();
        return view('admin.itinerary.edititinerary')->with('itinerary', $itineraries);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $submitValue = $request->submitValue;
        echo $submitValue;
        
        if($submitValue == "Update") {
            // Form validation
            $this->validate($request, [
                'customerId' => 'required',
                'customerName' => 'required',
                'email' => 'required|email',
                'itineraryTitle'=>'required',
                'fromDate'=>'required',
                'toDate'=>'required',
                'duration'=>'required'
            ]);

            $itinerary = Itinerary::find($id);

            $itinerary->customerId = $request->customerId;
            $itinerary->title = $request->itineraryTitle;
            $itinerary->fromDate = $request->fromDate;
            $itinerary->toDate = $request->toDate;
            $itinerary->duration = $request->duration;

            $itinerary->update();


            return redirect()->route('itinerary.index');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
