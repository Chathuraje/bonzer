<form method="POST" action="{{ route('itinerary.store') }}">
    @csrf <!-- {{ csrf_field() }} --> 

  <input type="hidden" name="itinerarieId" id="input-id" class="form-control" value="<?php echo $_GET['id']; ?>">
    <!-- Address -->
    <h6 class="heading-small text-muted mb-4">Add Flight</h6>
    <div class="pl-lg-4">
      <div class="row">
          <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label" for="input-trip-type">Trip Type</label>
                    <select name="flightType" class="form-control" id="input-trip-type">
                        <option>One Way</option>
                        <option>Round Trip</option>
                    </select>
                </div>
          </div>

          <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-itinarary-date">Itinerary Day</label>
                <select name="flightItineraryDay" class="form-control" id="input-itinarary-date">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
      </div>


          <div class="col-lg-4">
              <div class="form-group">
                  <label class="form-control-label" for="input-from">From</label>
                  <input name="flightFrom" type="text" id="input-from" class="form-control" placeholder="From">
              </div>
          </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-to">To</label>
                    <input name="flightTo" type="text" id="input-to" class="form-control" placeholder="To">
                </div>
            </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
              <div class="form-group">
                  <label class="form-control-label" for="input-vendor">Vendor/Supplier</label>
                  <input name="flightVendor" type="text" id="input-vendor" class="form-control" placeholder="Vendor/Supplie">
              </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-price">Sell Price (INR)</label>
                <input name="flightPrice" type="text" id="input-price" class="form-control" placeholder="Sell Price (INR)">
            </div>
        </div>

          <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-adult">Adult</label>
                  <input name="flightAdults" type="text" id="input-adult" class="form-control" placeholder="Adult">
              </div>
          </div>

          <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-child">Child</label>
                <input name="flightChild" type="text" id="input-child" class="form-control" placeholder="Child">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-infant">Infant</label>
                <input name="flightInfants" type="text" id="input-infant" class="form-control" placeholder="Infant">
            </div>
        </div>
    </div>

    <hr class="my-4" />
</div>


<h6 class="heading-small text-muted mb-4">Enter Departure Flight Details</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-depart-day">Depart Day</label>
                <input name="flightDepDepartDay" type="text" id="input-depart-day" class="form-control" placeholder="Depart Day">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-email">Depart Time</label>
                <input name="flightDepDepartTime" type="text" id="input-depart-time" class="form-control" placeholder="Depart Time">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-email">Arrival Day</label>
                <input name="flightDepArrivalDay" type="text" id="input-arrival-day" class="form-control" placeholder="Arrival Day">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-arrival-time">Arrival Time</label>
                <input name="flightDepArrivalTime" type="text" id="input-arrival-time" class="form-control" placeholder="Arrival Time">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-email">Airline Name</label>
                <input name="flightDepAirlineName" type="text" id="input-airline-name" class="form-control" placeholder="Airline Name">
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-flight-number">Flight Number</label>
                <input name="flightDepFlightNo" type="text" id="input-flight-number" class="form-control" placeholder="Flight Number">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-class">Class</label>
                <input name="flightDepClass" type="text" id="input-class" class="form-control" placeholder="Class">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-email">Duration</label>
                <input name="flightDepDuration" type="text" id="input-duration" class="form-control" placeholder="Duration">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-stops">Stops</label>
                <input name="flightDepStops" type="text" id="input-stops" class="form-control" placeholder="Stops">
            </div>
        </div>
    </div>

    <hr class="my-4" />
</div>

<h6 class="heading-small text-muted mb-4">Enter Return Flight Details</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-depart-day">Depart Day</label>
                <input name="flightRetDepartDay" type="text" id="input-depart-day" class="form-control" placeholder="Depart Day">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-depart-time">Depart Time</label>
                <input name="flightRetDepartTime" type="text" id="input-depart-time" class="form-control" placeholder="Depart Time">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-arrival-day">Arrival Day</label>
                <input name="flightRetArrivalDay" type="text" id="input-arrival-day" class="form-control" placeholder="Arrival Day">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-email">Depart Time</label>
                <input name="flightRetArrivalDay" type="text" id="input-depart-time" class="form-control" placeholder="Depart Time">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-airline-name">Airline Name</label>
                <input name="flightRetAirlineName" type="text" id="input-airline-name" class="form-control" placeholder="Airline Name">
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-flight-no">Flight Number</label>
                <input name="flightRetFlightNo" type="text" id="input-flight-no" class="form-control" placeholder="Flight Number">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-class">Class</label>
                <input name="flightRetClass" type="text" id="input-class" class="form-control" placeholder="Class">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-duration">Duration</label>
                <input name="flightRetDuration" type="text" id="input-duration" class="form-control" placeholder="Duration">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-stops">Stops</label>
                <input name="flightRetStops" type="text" id="input-stops" class="form-control" placeholder="Stops">
            </div>
        </div>
    </div>

    
</div>

<hr class="my-4" />


<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label">Other Requirements</label>
                <textarea name="flightDescription" rows="4" class="form-control" placeholder="A few words about ..."></textarea>
            </div>
        </div>
    </div>

    
    <hr class="my-4" />
</div>

<div class="row align-items-center">
<div class="col-8">
</div>
<div class="col-4 text-right">
<button type="submit" class="btn btn-md btn-primary"  name="submitValue" value="addFlight">Add Flight</button>
</div>
</div>

<hr class="my-4" />



</form>