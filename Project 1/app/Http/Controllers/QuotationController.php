<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use App\Models\Customer;
use App\Models\QuotationData;

class quotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotations = Quotation::join('customers', 'quotations.customerId', '=', 'customers.id')
        ->get(['quotations.*', 'customers.firstName', 'customers.lastName', 'customers.email', 'customers.mobileNumber']);

        return view('admin.quatation.quotation')->with('quotations', $quotations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all("id", "firstName", "lastName", "email", "mobileNumber");
        return view('admin.quatation.addnewquotation', compact('customers'));
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
                'title' => 'required'
            ]);

            $quotation = new Quotation();

            $quotation->customerId = $request->customerId;
            $quotation->title = $request->title;

            $quotation->save();

            $Id = $quotation->id;

            return redirect()->route('quotation.show', $Id);
            
        } else if($submitValue == "addActivity") {
            // Form validation
            /*$this->validate($request, [
                'quotationId' => 'required',
                'activitiesName'=>'required',
                'activitiesAddress'=>'required',
                'activitiesquotationDay'=>'required',
                'activitiesDuration'=>'required',
                'activitiesNoOfGuests'=>'required',
                'activitiesActivityType'=>'required',
                'activitiesVendor'=>'required',
                'activitiesPrice'=>'required'
            ]);*/

            $quotationData = new quotationData();

            $quotationData->quotationId = $request->quotationId;
            $quotationData->quotationType = "Activity";
            $quotationData->quotationTypeId = "4";
            $quotationData->activitiesName = $request->activitiesName;
            $quotationData->activitiesAddress = $request->activitiesAddress;
            $quotationData->quotationDay = $request->activitiesquotationDay;
            $quotationData->activitiesDuration = $request->activitiesDuration;
            $quotationData->activitiesNoOfGuests = $request->activitiesNoOfGuests;
            $quotationData->activitiesActivityType = $request->activitiesActivityType;
            $quotationData->activitiesVendor = $request->activitiesVendor;
            $quotationData->activitiesPrice = $request->activitiesPrice;
            $quotationData->activitiesDescription = $request->activitiesDescription;

            $quotationData->save();

            $Id = $request->quotationId;

            return redirect()->route('quotation.show', $Id);


        } else if($submitValue == "addCustomItem") {
            /* // Form validation
             $this->validate($request, [
                'quotationId' => 'required',
                'customLocation'=>'required',
                'customItemName'=>'required',
                'customquotationDay'=>'required',
                'customItemType'=>'required',
                'customVendor'=>'required',
                'customPrice'=>'required'
            ]);*/

            $quotationData = new quotationData();

            $quotationData->quotationId = $request->quotationId;
            $quotationData->quotationType = "Custom";
            $quotationData->quotationTypeId = "3";
            $quotationData->customLocation = $request->customLocation;
            $quotationData->customLocation = $request->customLocation;
            $quotationData->customItemName = $request->customItemName;
            $quotationData->quotationDay = $request->customquotationDay;
            $quotationData->customItemType = $request->customItemType;
            $quotationData->customVendor = $request->customVendor;
            $quotationData->customPrice = $request->customPrice;
            $quotationData->activitiesVendor = $request->activitiesVendor;
            $quotationData->customDescription = $request->customDescription;

            $quotationData->save();

            $Id = $request->quotationId;

            return redirect()->route('quotation.show', $Id);

        } else if($submitValue == "addFlight") {

             // Form validation
             // Form validation
            /* $this->validate($request, [
                'quotationId' => 'required',

                'flightquotationDay' => 'required',
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
            ]);*/

            $quotationData = new quotationData();

            $quotationData->quotationId = $request->quotationId;
            $quotationData->quotationType = "Flight";
            $quotationData->quotationTypeId = "2";
            $quotationData->quotationDay = $request->flightquotationDay;

            $quotationData->flightType = $request->flightType;
            $quotationData->flightFrom = $request->flightFrom;
            $quotationData->flightTo = $request->flightTo;
            $quotationData->flightVendor = $request->flightVendor;
            $quotationData->flightPrice = $request->flightPrice;
            $quotationData->flightAdults = $request->flightAdults;
            $quotationData->flightChild = $request->flightChild;
            $quotationData->flightInfants = $request->flightInfants;

            $quotationData->flightDepDepartDay = $request->flightDepDepartDay;
            $quotationData->flightDepDepartTime = $request->flightDepDepartTime;
            $quotationData->flightDepArrivalDay = $request->flightDepArrivalDay;
            $quotationData->flightDepArrivalTime = $request->flightDepArrivalTime;
            $quotationData->flightDepAirlineName = $request->flightDepAirlineName;
            $quotationData->flightDepFlightNo = $request->flightDepFlightNo;
            $quotationData->flightDepClass = $request->flightDepClass;
            $quotationData->flightDepStops = $request->flightDepStops;

            
            $quotationData->flightRetDepartDay = $request->flightRetDepartDay;
            $quotationData->flightRetDepartTime = $request->flightRetDepartTime;
            $quotationData->flightRetArrivalDay = $request->flightRetArrivalDay;
            $quotationData->flightRetArrivalTime = $request->flightRetArrivalTime;
            $quotationData->flightRetAirlineName = $request->flightRetAirlineName;
            $quotationData->flightRetFlightNo = $request->flightRetFlightNo;
            $quotationData->flightRetClass = $request->flightRetClass;
            $quotationData->flightRetStops = $request->flightRetStops;
            

            $quotationData->flightDescription = $request->flightDescription;

            $quotationData->save();

            $Id = $request->quotationId;

            return redirect()->route('quotation.show', $Id);
            
        } else if($submitValue == "addHotel") {
            
           /* // Form validation
            $this->validate($request, [
                'quotationId' => 'required',

                'hotelName'=>'required',
                'hotelAddress'=>'required',
                'hotelquotationDay'=>'required',
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
            ]);*/

            $quotationData = new quotationData();

            $quotationData->quotationId = $request->quotationId;
            $quotationData->quotationType = "Hotel";
            $quotationData->quotationTypeId = "1";

            $quotationData->hotelName = $request->hotelName;
            $quotationData->hotelAddress = $request->hotelAddress;
            $quotationData->quotationDay = $request->hotelquotationDay;
            $quotationData->hotelNoOfNights = $request->hotelNoOfNights;
            $quotationData->hotelStarRating = $request->hotelStarRating;
            $quotationData->hotelRooms = $request->hotelRooms;
            $quotationData->hotelRoomType = $request->hotelRoomType;
            $quotationData->hotelMealType = $request->hotelMealType;

            $quotationData->hotelVendor = $request->hotelVendor;
            $quotationData->hotelPrice = $request->hotelPrice;
            $quotationData->hotelAdults = $request->hotelAdults;
            $quotationData->hotelChildren = $request->hotelChildren;
            $quotationData->hotelInfant = $request->hotelInfant;

            $quotationData->save();

            $Id = $request->quotationId;

            return redirect()->route('quotation.show', $Id);

        } else if($submitValue == "addTransfer") {
            
           /* // Form validation
            $this->validate($request, [
                'quotationId' => 'required',
                'transferPickupLocation' => 'required',
                'transfeDropLocationr' => 'required',
                'transferquotationDay'=>'required',
                'transferPickupTime'=>'required',
                'transferVehicleType'=>'required',
                'transferNoOfGuests'=>'required',
                'transferVendor'=>'required',
                'transferPrice'=>'required'
            ]);*/

            $quotationData = new quotationData();

            $quotationData->quotationId = $request->quotationId;
            $quotationData->quotationType = "Transfer";
            $quotationData->quotationTypeId = "5";
            $quotationData->transferPickupLocation = $request->transferPickupLocation;
            $quotationData->transfeDropLocationr = $request->transfeDropLocationr;
            $quotationData->quotationDay = $request->transferquotationDay;
            $quotationData->transferPickupTime = $request->transferPickupTime;
            $quotationData->transferVehicleType = $request->transferVehicleType;
            $quotationData->transferNoOfGuests = $request->transferNoOfGuests;
            $quotationData->transferVendor = $request->transferVendor;
            $quotationData->transferPrice = $request->transferPrice;
            $quotationData->transferDescription = $request->transferDescription;

            $quotationData->save();

            $Id = $request->quotationId;

            return redirect()->route('quotation.show', $Id);
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
        $quotations = Quotation::join('customers', 'quotations.customerId', '=', 'customers.id')
        ->where('quotations.id', '=', $id)
        ->get(['quotations.*', 'customers.firstName', 'customers.lastName'])
        ->first();

        $quotationsDetails = QuotationData::all()->where('quotationId', '=', $id);


        return view('admin.quatation.quotationdetails')
        ->with('quotations', $quotations)
        ->with('quotationsDetails', $quotationsDetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quotations = Quotation::join('customers', 'quotations.customerId', '=', 'customers.id')
        ->where('quotations.id', '=', $id)
        ->get(['quotations.*', 'customers.firstName', 'customers.lastName', 'customers.email', 'customers.mobileNumber'])
        ->first();
        return view('admin.quatation.editquotation')->with('quotations', $quotations);
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
                'title' => 'required'
            ]);

            $quotations = Quotation::find($id);

            $quotations->title = $request->title;

            $quotations->update();


            return redirect()->route('quotation.index');
            
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
