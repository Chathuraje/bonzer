<form method="POST" action="{{ route('quotation.store') }}">
    @csrf <!-- {{ csrf_field() }} --> 

  <input type="hidden" name="quotationId" id="input-id" class="form-control" value="<?php echo $_GET['id']; ?>">
    <!-- Address -->
    <h6 class="heading-small text-muted mb-4">Add Transfer</h6>
    <div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-pick-up-location">Pick-up Location</label>
                    <input name="transferPickupLocation" type="text" id="input-pick-up-location" class="form-control" placeholder="Pick-up Location">
                </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-country">Drop-off Location</label>
                <input name="transfeDropLocationr" type="text" id="input-drop-off-location" class="form-control" placeholder="Drop-off Location">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-itinary-day">Itinerary Day</label>
                <input name="transferItineraryDay" type="text" id="input-itinary-day" class="form-control" placeholder="Itinerary Day">
            </div>
        </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label" for="input-duration">Duration</label>
                    <input name="transferPickupTime" type="text" id="input-duration" class="form-control" placeholder="Duration">
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-vtype">Vehicle Type (eg. Bus, Sedan)</label>
                <input name="transferVehicleType" type="text" id="input-vtype" class="form-control" placeholder="Vehicle Type (eg. Bus, Sedan)">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-no-of-guests">No of Guests</label>
                <input name="transferNoOfGuests" type="text" id="input-no-of-guests" class="form-control" placeholder="No of Guests">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-vendor">Vendor/Supplie</label>
                <input name="transferVendor" type="text" id="input-vendor" class="form-control" placeholder="Vendor/Supplie">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-price">Sell Price (INR)</label>
                <input name="transferPrice" type="text" id="input-price" class="form-control" placeholder="Sell Price (INR)">
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
                <textarea name="transferDescription" rows="4" class="form-control" placeholder="A few words about you ..."></textarea>
            </div>
        </div>
    </div>

    
    <hr class="my-4" />
</div>


<div class="row align-items-center">
<div class="col-8">
</div>
<div class="col-4 text-right">
<button type="submit" class="btn btn-md btn-primary" name="submitValue" value="addTransfer">Add Transfer</button>
</div>
</div>

<hr class="my-4" />



</form>