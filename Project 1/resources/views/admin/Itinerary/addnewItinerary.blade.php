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
              <li class="breadcrumb-item"><a href="{{ route('itinerary') }}">Itinerary</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('addnewitinerary') }}"> Add a New Itinerary</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Add a New Itinerary</h6>
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
                  
                  <form>
                  <div class="card-body">
                      <h6 class="heading-small text-muted mb-4">Customer Details</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-email">Customer * (e.g. Firstname Lastname)</label>
                                  <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                                </div>
                            </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-first-name">Email *</label>
                              <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Contact Phone *</label>
                              <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4" />
                      <!-- Address -->
                      <h6 class="heading-small text-muted mb-4">Itinerary Details</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-country">Itinerary Title / Details*</label>
                                  <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                                </div>
                              </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">From Date</label>
                                <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                              </div>
                          </div>

                          <div class="col-lg-2">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">To Date</label>
                                <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                              </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Duration (Nights)*</label>
                                <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                              </div>
                        </div>
                      
                      </div>
                      <hr class="my-4" />
                  </div>
                  

                  <div class="card-footer">
                    <div class="row align-items-center">
                      <div class="col-8">
                      </div>
                      <div class="col-4 text-right">
                        <button type="submit" class="btn btn-md btn-primary">Add Itinerary</button>
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