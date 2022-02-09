<form method="POST" action="{{ route('quotation.store') }}">
    @csrf <!-- {{ csrf_field() }} --> 

  <input type="hidden" name="quotationId" id="input-id" class="form-control" value="<?php echo $_GET['id']; ?>">
    <!-- Address -->
    <h6 class="heading-small text-muted mb-4">Add Custom</h6>
    <div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="input-country">Location</label>
                    <input type="text" name="customLocation" id="input-location" class="form-control" placeholder="Location">
                </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-item-name">Item Name</label>
                <input type="text" name="customItemName" id="input-first-item-name" class="form-control" placeholder="Item Name">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-itinerary-day">Itinerary Day</label>
                <input type="text" name="customItineraryDay" id="input-first-itinerary-day" class="form-control" placeholder="Itinerary Day" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-item-type">Item Type (eg. Restaurant)</label>
                <input type="text" name="customItemType" id="input-first-item-type" class="form-control" placeholder="Item Type (eg. Restaurant)">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-vendor">Vendor/Supplie</label>
                <input type="text" name="customVendor" id="input-vendor" class="form-control" placeholder="Vendor/Supplie">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="input-price">Sell Price (INR)</label>
                <input type="text" name="customPrice" id="input-price" class="form-control" placeholder="Sell Price (INR)">
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
                <textarea rows="4" name="customDescription" class="form-control" placeholder="A few words about ..."></textarea>
            </div>
        </div>
    </div>

    
    <hr class="my-4" />
</div>



<div class="row align-items-center">
<div class="col-8">
</div>
<div class="col-4 text-right">
<button type="submit" class="btn btn-md btn-primary" name="submitValue" value="addCustomItem">Add Custom Item</button>
</div>
</div>

<hr class="my-4" />



</form>