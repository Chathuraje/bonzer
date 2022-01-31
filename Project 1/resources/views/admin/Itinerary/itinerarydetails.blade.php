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
              <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('addnewitinerary') }}">Itinerary Details</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Itinerary Details</h6>
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
                          <h6 class="h2 d-inline-block mb-0">Itinerary for chathura Ek - Gradient Color - 08/12/2021 to 12/12/2021</h6>
                      </div>
                      <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Delete</a>
                      </div>
                    </div>
                  </div>
                  <script>
                      $(document).ready(function(){
                        $("#btnHotel").click(function(){
                            $("#main-it").load("../../addhotel");
                        });

                        $("#btnFlight").click(function(){
                            $("#main-it").load("../../addflight");
                        });

                        $("#btnCustom").click(function(){
                            $("#main-it").load("../../addcustomitem");
                        });

                        $("#btnActivities").click(function(){
                            $("#main-it").load("../../addactivity");
                        });

                        $("#btnTransfer").click(function(){
                            $("#main-it").load("../../addtransfer");
                        });
                    });

                    </script>
                  
                  <div class="card-body">
                    <h6 class="heading-small text-muted mb-4 text-center">Add Items to Itinerary</h6>
                    <div class="pl-lg-4">
                        <div class="row text-center">
                            <div class="col-lg-3">
                                <h6 class="h1 heading-large text-muted mb-4 text-center"></h6>
                            </div>

                            <div class="col-lg-1">
                                <h6 class="h1 heading-large text-muted mb-4 text-center">
                                    <a class="iconColor" id="btnHotel">
                                        <i class="fas fa-hotel"></i>
                                        <p>Hotels</p>
                                    </a>
                                </h6>
                            </div>

                            <div class="col-lg-1">
                                <h6 class="h1 heading-large text-muted mb-4 text-center">
                                    <a class="iconColor" id="btnFlight">
                                        <i class="fas fa-fighter-jet"></i>
                                        <p>Flights</p>
                                    </a>
                                </h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="h1 heading-large text-muted mb-4 text-center">
                                    <a class="iconColor" id="btnCustom">
                                        <i class="fas fa-folder-plus"></i>
                                        <p>Custom</p>
                                    </a>
                                </h6>
                            </div>

                            <div class="col-lg-1">
                                <h6 class="h1 heading-large text-muted mb-4 text-center">
                                    <a class="iconColor" id="btnActivities">
                                        <i class="fas fa-snowboarding"></i>
                                        <p>Activities</p>
                                    </a>
                                </h6>
                            </div>

                            <div class="col-lg-1">
                                <h6 class="h1 heading-large text-muted mb-4 text-center">
                                    <a class="iconColor" id="btnTransfer">
                                        <i class="fas fa-car"></i>
                                        <p>Transfer</p>
                                     </a>
                                </h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="h1 heading-large text-muted mb-4 text-center">
                                   
                                </h6>
                            </div>
                        </div>
                      </div>
                      <hr class="my-4" />
                      <div id="main-it">

                      </div>
                      <!-- Add Hotel -->
                      <!-- Add Flight -->
                      <!-- Add activity -->
                      <!-- Add Transfer --> 
                      <!-- Add Custom --> 
                </div>
              </div>


            <!-- Itinerarydetailsview -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h6 class="h2 d-inline-block mb-0">Itinerary Details</h6>
                                </div>
                                <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Delete</a>
                                </div>
                            </div>
                        </div>
                
                        <div class="card-body">
                            <h6 class="heading-small text-muted mb-4 text-center">Add Items to Itinerary</h6>
                            <div class="pl-lg-4">
                                <div class="row text-center">
                                    Day 1 | 21-05-2021
                                </div>

                                <div class="row text-center">
                                    Day 2 | 21-05-2021
                                </div>

                                <div class="row text-center">
                                    Day 3 | 21-05-2021
                                </div>
                            </div>
                            <hr class="my-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
@endsection