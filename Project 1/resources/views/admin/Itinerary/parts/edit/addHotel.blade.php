<form method="POST" action="{{ route('itinerary.store') }}">
    @csrf <!-- {{ csrf_field() }} --> 

  <input type="hidden" name="itinerarieId" id="input-id" class="form-control" value="<?php echo $_GET['id']; ?>">
    <!-- Address -->
    <h6 class="heading-small text-muted mb-4">Add Hotel</h6>
    <div class="pl-lg-4">
      <div class="row">
          <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label" for="input-hotel-name">Hotel Name</label>
                <input name="hotelName" type="text" id="input-hotel-name" class="form-control" placeholder="Hotel Name">
              </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                  <label class="form-control-label" for="input-address">Address / Location</label>
                  <input name="hotelAddress" type="text" id="input-address" class="form-control" placeholder="Address / Location">
              </div>
          </div>

          <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-itinarary-date">Itinerary Day</label>
                  <select name="hotelItinerarieDay" class="form-control" id="input-itinarary-date">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
              </div>
        </div>

        <div class="col-lg-2">
          <div class="form-group">
              <label class="form-control-label" for="input-no-of-nights">No of Nights</label>
              <select name="hotelNoOfNights" class="form-control" id="input-no-of-nights">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
          </div>
          </div>
  
      </div>

      <div class="row">
          <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-star-rating">Star Rating</label>
                  <select name="hotelStarRating" class="form-control" id="input-star-rating">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
              </div>
          </div>
          <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-no-of-rooms">No of Rooms</label>
                  <input name="hotelRooms" type="text" id="input-no-of-rooms" class="form-control" placeholder="No of Rooms">
              </div>
          </div>

          <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-room-type">Room Type</label>
                  <input name="hotelRoomType" type="text" id="input-room-type" class="form-control" placeholder="Room Type">
              </div>
          </div>

          <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-meal-type">Meal Type</label>
                  <select name="hotelMealType" class="form-control" id="input-meal-type">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
              </div>
          </div>

          <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-vendor">Vendor/Supplier</label>
                  <input name="hotelVendor" type="text" id="input-vendor" class="form-control" placeholder="Vendor/Supplier">
              </div>
          </div> 
          
          <div class="col-lg-2">
              <div class="form-group">
                  <label class="form-control-label" for="input-price">Sell Price (INR)</label>
                  <input name="hotelPrice" type="text" id="input-pricee" class="form-control" placeholder="Sell Price (INR)">
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-adults">Adults</label>
                <input name="hotelAdults" type="text" id="input-adults" class="form-control" placeholder="Adutls">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-children">Childrens</label>
                <input name="hotelChildren" type="text" id="input-children" class="form-control" placeholder="Childrens">
            </div>
        </div>

        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-infant">Infant</label>
                <input name="hotelInfant" type="text" id="input-infant" class="form-control" placeholder="Infant">
            </div>
        </div> 
        
      
    </div>


      <div class="row align-items-center">
          <div class="col-8">
          </div>
          <div class="col-4 text-right">
            <button type="submit" class="btn btn-md btn-primary"  name="submitValue" value="addHotel">Add Hotel</button>
          </div>
        </div>
  
    <hr class="my-4" />
</div>
</form>