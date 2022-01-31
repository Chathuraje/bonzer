@extends('admin.layouts.main')

@section('subcontent')

<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/inquiry">Inquiry</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="/inquiry/create"> Add a New Inquiry</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Add a New Inquiry</h6>
        </div>
      </div>
      <!-- Card stats -->
    </div>
  </div>
</div>

@endsection


@section('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-8">
                      </div>
                      <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Clear</a>
                      </div>
                    </div>
                  </div>
                  
                  <form method="POST" action="{{ route('inquiry.store') }}">
                    @csrf <!-- {{ csrf_field() }} --> 

                  <input type="hidden" name="customerId" id="input-id" class="form-control" value="1">
                                
                  <div class="card-body">
                      <h6 class="heading-small text-muted mb-4">Customer Details</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-customer-name">Customer * (e.g. Firstname Lastname)</label>
                                  <input type="text" name="customerName" id="input-customer-name" class="form-control" placeholder="Customer Name" required>
                                </div>
                            </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-email">Email *</label>
                              <input type="email" name="email" id="input-email" class="form-control" placeholder="jesse@example.com" required>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-contact-no">Contact Phone *</label>
                              <input type="text" name="contactNo" id="input-contact-no" class="form-control" placeholder="Contract Number" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4" />
                      <!-- Address -->
                      <h6 class="heading-small text-muted mb-4">Inquiry Details</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-title">Inquiry Title / Details*</label>
                                  <input type="text" name="inquiryTitle" id="input-title" class="form-control" placeholder="Inquiry Title / Details" required>
                                </div>
                              </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-type">Inquiry Type</label>
                              <select class="form-control" name="inquiryType" id="input-type" required>
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
                            <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-source">Inquiry Source</label>
                              <select class="form-control" name="inquirySource" id="input-source" required>
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
                                <label class="form-control-label" for="input-city">Trip Type</label>
                                <select class="form-control" name="tripType" id="input-city" required>
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
                                <label class="form-control-label" for="input-bookkingForSource">Booking For Source</label>
                                <select class="form-control" name="bookkingForSource" id="input-bookkingForSource" required>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                              </div>
                            </div>
                            
                          </div>
                      </div>
                      <hr class="my-4" />


                      <h6 class="heading-small text-muted mb-4">Trip Details</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-start-date">Start Date</label>
                                  <input type="date" name="startDate" id="input-start-date" class="form-control" placeholder="Start Date" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-follow-date">Followup Date</label>
                                  <input type="date" name="followupDate" id="input-follow-date" class="form-control" placeholder="Followup Date" required>
                                </div>
                            </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-duration">Duration (Nights)*</label>
                              <input type="number" min=1 value="1" name="duration" id="input-duration" class="form-control" placeholder="Duration (Nights)*" required>
                            </div>
                          </div>
                          
                        </div>

                        <div class="row">
                           
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label class="form-control-label" for="input-adults">Adults</label>
                              <input type="number" min=1 value="1" name="adults" id="input-adults" class="form-control" placeholder="Adults" required>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label class="form-control-label" for="input-child">Childrens</label>
                              <input type="number" min=0 value="0"  name="child" id="input-child" class="form-control" placeholder="Childrens" value="0" required>
                            </div>
                          </div> 
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label class="form-control-label" for="input-infants">Infant(s)</label>
                              <input type="number" min=0 value="0" name="infants" id="input-infants" class="form-control" placeholder="Infants" value="0" required>
                            </div>
                          </div>

                          <div class="col-lg-2">
                            <div class="form-group">
                              <label class="form-control-label" for="input-budget">Budget (INR)</label>
                              <input type="number" min=0 value="0" name="budget" id="input-budget" class="form-control" placeholder="Budget" value="0" required>
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-status">Status</label>
                              <input type="text" name="status" id="input-status" class="form-control" placeholder="Status" value="Inquiry Created" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4" />


                      <!-- Description -->
                      <h6 class="heading-small text-muted mb-4">Other</h6>
                      <div class="pl-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Other Requirements</label>
                          <textarea rows="4" name="other" class="form-control" placeholder="A few words about you ..."></textarea>
                        </div>
                      </div>
                  </div>
                  

                  <div class="card-footer">
                    <div class="row align-items-center">
                      <div class="col-8">
                      </div>
                      <div class="col-4 text-right">
                        <button type="submit" class="btn btn-md btn-primary">Add Inquiry</button>
                      </div>
                    </div>
                  </div>
                  
                </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
      
@endsection