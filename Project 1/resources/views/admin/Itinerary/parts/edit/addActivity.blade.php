<form method="POST" action="{{ route('itinerary.store') }}">
    @csrf <!-- {{ csrf_field() }} --> 

  <input type="hidden" name="itinerarieId" id="input-id" class="form-control" value="<?php echo $_GET['id']; ?>">
    <!-- Address -->
    <h6 class="heading-small text-muted mb-4">Add Activity</h6>
    <div class="pl-lg-4">
      <div class="row">
          <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-activity-name">Activity Name</label>
                    <input type="text" name="activitiesName" id="input-activity-name" class="form-control" placeholder="Activity name" required>
                </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-address">Address / Location</label>
                <input type="text" name="activitiesAddress" id="input-address" class="form-control" placeholder="Address / Location" required>
            </div>
        </div>
          <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-itinerary-day">Itinerary Day</label>
                  <input type="text" name="activitiesItineraryDay" id="input-itinerary-day" class="form-control" placeholder="Itinerary Day" required>
              </div>
          </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label" for="input-duration">Duration</label>
                    <input type="text" name="activitiesDuration" id="input-duration" class="form-control" placeholder="Duration" required>
                </div>
            </div>
      </div>

      <div class="row">
        <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-no-of-guests">No of Guests</label>
                  <input type="Number" name="activitiesNoOfGuests" id="input-no-of-guests" class="form-control" placeholder="1" min="1" required> 
              </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-activity-type">Activity Type</label>
                <input type="text" name="activitiesActivityType" id="input-activity-type" class="form-control" placeholder="Activity Type" required>
            </div>
        </div>

          <div class="col-lg-4">
              <div class="form-group">
                  <label class="form-control-label" for="input-vendor">Vendor/Supplie</label>
                  <input type="text" name="activitiesVendor"  id="input-vendor" class="form-control" placeholder="Vendor/Supplie">
              </div>
          </div>

          <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-price">Sell Price (INR)</label>
                <input type="text" name="activitiesPrice"  id="input-price" class="form-control" placeholder="Sell Price (INR)">
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
                <textarea rows="4" name="activitiesDescription"  class="form-control" placeholder="A few words about..."></textarea>
            </div>
        </div>
    </div>

    
    <hr class="my-4" />
</div>


<div class="row align-items-center">
<div class="col-8">
</div>
<div class="col-4 text-right">
<button type="submit" class="btn btn-md btn-primary" name="submitValue" value="addActivity">Add Activity</button>
</div>
</div>

<hr class="my-4" />



</form>