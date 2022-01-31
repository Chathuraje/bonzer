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
              <li class="breadcrumb-item"><a href="/customer">Customer</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="/customer/create"> Add a New Customer</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Add a New Customer</h6>
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
                  
                  <form method="POST" action="{{ route('customer.store') }}">
                    @csrf <!-- {{ csrf_field() }} --> 
                  <div class="card-body">
                      <h6 class="heading-small text-muted mb-4">Customer Details</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-first-name">Email *</label>
                              <input name="email" type="email" id="input-email" class="form-control" placeholder="name@example.com" required>
                            </div>
                          </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-email">Customer Firstname</label>
                                  <input name="firstName" type="text" id="input-first-name" class="form-control" placeholder="First name" required>
                                </div>
                            </div>
                          
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Customer Lastname</label>
                              <input name="lastName" type="text" id="input-last-name" class="form-control" placeholder="Last name"  required>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-bday">BirthDate</label>
                              <input name="birthDate" type="date" id="input-bday" class="form-control" placeholder="Birth Date">
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-branch">Branch Name</label>
                              <select name="branch" class="form-control" id="input-branch" required>
                                <option value="Branch 1">Branch 1</option>
                                <option value="Branch 2">Branch 2</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-city">Gender</label>
                              <select name="gender" class="form-control" id="input-gender" required>
                                <option value="Male">Male</option>
                                <option value="Demale">Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4" />
                      <!-- Address -->
                      <h6 class="heading-small text-muted mb-4">Contact Information</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-contact-No">Mobile Number</label>
                                  <input name="mobileNumber" type="text" id="input-contact-No" class="form-control" placeholder="Mobile Number" required>
                                </div>
                              </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-city">Country</label>
                              <select name="country" class="form-control" id="exampleFormControlSelect1" required>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="India">India</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="united State">United State</option>
                                <option value="5">5</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-city">City</label>
                              <input name="city" type="text" id="input-city" class="form-control" placeholder="City" required>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-8">
                              <div class="form-group">
                                <label class="form-control-label" for="input-address">Address</label>
                                <input name="address" type="text" id="input-address" class="form-control" placeholder="Address">
                              </div>
                            </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label" for="input-zip">Zip Code/ Postal Code</label>
                            <input name="postalCode" type="text" id="input-zip" class="form-control" placeholder="Zip Code/ Postal Code">
                          </div>
                        </div>
                      </div>
                      </div>
                      <hr class="my-4" />


                      <h6 class="heading-small text-muted mb-4">Document Details</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label class="form-control-label" for="input-document-type">Document Type</label>
                                <select name="documentType" class="form-control" id="input-document-type">
                                  <option value="Passport">Passport</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label class="form-control-label" for="input-docNumber">Document Number</label>
                                <input name="docNumber" type="text" id="input-docNumber" class="form-control" placeholder="Document Number" required>
                              </div>
                            </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-expireDate">Expire Date</label>
                              <input name="expireDate" type="date" id="input-expireDate" class="form-control" placeholder="Expire Date" required>
                            </div>
                          </div>
                          
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                              <div class="form-group">
                                <label class="form-control-label" for="input-nationality">Nationality</label>
                                <select name="nationalioty" class="form-control" id="input-nationality" required>
                                  <option value="Sri Lanka">Sri Lanka</option>
                                  <option value="India">India</option>
                                  <option value="United Kingdom">United Kingdom</option>
                                  <option value="united State">United State</option>
                                  <option value="5">5</option>
                                </select>
                            </div>
                          </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label" for="input-city">Issuing Country</label>
                            <select name="isuuingCountry" class="form-control" id="input-city" required>
                              <option value="Sri Lanka">Sri Lanka</option>
                              <option value="India">India</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="united State">United State</option>
                              <option value="5">5</option>
                            </select>
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
                          <textarea name="others" rows="4" class="form-control" placeholder="A few words about ..."></textarea>
                        </div>
                      </div>
                  </div>
                  

                  <div class="card-footer">
                    <div class="row align-items-center">
                      <div class="col-8">
                      </div>
                      <div class="col-4 text-right">
                        <button type="submit" class="btn btn-md btn-primary">Add Customer</button>
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