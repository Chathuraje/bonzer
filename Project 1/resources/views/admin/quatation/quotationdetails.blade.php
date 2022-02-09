@extends('admin.layouts.main')

@section('subcontent')

<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/itinerary">Quotations</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="/itinerary/create">Quotations Details</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Quotations Details</h6>
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
                            <h4 class="h2 d-inline-block mb-0">Quotations for <b>{{ $quotations->firstName . " " . $quotations->lastName}} </b> | {{$quotations->title}}</h4>
                        </div>
                      <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Delete</a>
                      </div>
                    </div>
                  </div>

                  @if (count($errors) > 0)
                          <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div>
                      @endif
                  
                  <script>
                      $(document).ready(function(){
                        $("#btnHotel").click(function(){
                            $("#main-it").load("../../addQHotel?id={{$quotations->id}}");
                        });

                        $("#btnFlight").click(function(){
                            $("#main-it").load("../../addQFlight?id={{$quotations->id}}");
                        });

                        $("#btnCustom").click(function(){
                            $("#main-it").load("../../addQCustomItem?id={{$quotations->id}}");
                        });

                        $("#btnActivities").click(function(){
                            $("#main-it").load("../../addQActivity?id={{$quotations->id}}");
                        });

                        $("#btnTransfer").click(function(){
                            $("#main-it").load("../../addQTransfer?id={{$quotations->id}}");
                        });
                    });

                    </script>
                  
                  <div class="card-body">
                    <h6 class="heading-small text-muted mb-4 text-center">Add Items to quotations</h6>
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
                                    <h6 class="h2 d-inline-block mb-0">quotations Details</h6>
                                </div>
                                <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Delete</a>
                                </div>
                            </div>
                        </div>
                
                        <div class="card-body">
                            @if($quotationsDetails->isEmpty())
                                <h6 class="heading-small text-muted mb-4 text-center">Add Items to quotations</h6>
                            @endif

                            <div class="pl-lg-4">
                                <div class="card card-frame red">
                                        <div class="card-body">
                                            @foreach ($quotationsDetails as $quotationData)
                                                    @if($quotationData->quotationTypeId == "1") <!-- Hotel -->
                                                    
                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <span class="alert-icon"><i class="fa fa-hotel"></i></span>
                                                        <span class="alert-text"><strong>Hotel Name & Address: </strong> {{$quotationData->hotelName}} , {{$quotationData->hotelAddress}}</span>
                                                            <br/>
                                                            
                                                        <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                        <span class="alert-text"><strong>Stay In: </strong> {{$quotationData->hotelNoOfNights}} Night(s)</span>
                                                            |
                                                        <span class="alert-text"><strong>Hotel Rooms: </strong> {{$quotationData->hotelRooms}}</span>
                                                            <br/>

                                                        <span class="alert-icon"><i class="fa fa-person-booth"></i></span>
                                                        <span class="alert-text"><strong>Hotel Room Type: </strong> {{$quotationData->hotelRoomType}}</span>
                                                          | 
                                                        <span class="alert-icon"><i class="fa fa-utensils"></i></span>
                                                        <span class="alert-text"><strong>Hotel Meal Type: </strong> {{$quotationData->hotelMealType}}</span>
                                                            <br/>

                                                        <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                        <span class="alert-text"><strong>Hotel Price: </strong> {{$quotationData->hotelPrice}}</span>
                                                            <br/>
                                                    </div>
                                                            <br/>

                                                    @elseif ($quotationData->quotationTypeId == "2") <!-- Flight -->
                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <span class="alert-icon"><i class="fa fa-plane"></i></span>
                                                        <span class="alert-text"><strong>Flight Type: </strong> {{$quotationData->flightType}}</span>
                                                            <br/>
                                                            
                                                        <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                        <span class="alert-text"><strong>From: </strong> {{$quotationData->flightFrom}} </span> | 
                                                        <span class="alert-text"><strong>To: </strong> {{$quotationData->flightTo}} </span>
                                                            <br/>
                                                        <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                        <span class="alert-text"><strong>Flight Price: </strong> {{$quotationData->flightPrice}}</span>
                                                            <br/>
                                                    </div>
                                                            <br/>

                                                    @elseif ($quotationData->quotationTypeId == "3") <!-- Custom -->

                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                                                        <span class="alert-text"><strong>Custom Name and Location </strong> {{$quotationData->customItemName}}, {{$quotationData->customLocation}}</span>
                                                            <br/>
                                                            
                                                        <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                        <span class="alert-text"><strong>Custom Item Type: </strong> {{$quotationData->customItemType}} </span>
                                                            <br/>
                                                        <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                        <span class="alert-text"><strong>Custom Price: </strong> {{$quotationData->customPrice}}</span>
                                                            <br/>
                                                    </div>
                                                            <br/>

                                                    @elseif ($quotationData->quotationTypeId == "4") <!-- Activities -->

                                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                            <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                                                            <span class="alert-text"><strong>Activity and Location </strong> {{$quotationData->activitiesName}}, {{$quotationData->activitiesAddress}}</span>
                                                                <br/>
                                                                
                                                            <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                            <span class="alert-text"><strong>Activity Type: </strong> {{$quotationData->activitiesActivityType}} </span>
                                                                <br/>
                                                            <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                            <span class="alert-text"><strong>Custom Price: </strong> {{$quotationData->activitiesPrice}}</span>
                                                            <br/>
                                                    </div>
                                                            <br/>
                                                        
                                                    @elseif ($quotationData->quotationTypeId == "5") <!-- Transfer -->

                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                                                        <span class="alert-text"><strong>Transfer Pick Up and Drop Location </strong> {{$quotationData->transferPickupLocation}} <i class="fas fa-arrow-right"></i> {{$quotationData->transfeDropLocationr}}</span>
                                                            <br/>
                                                            
                                                        <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                        <span class="alert-text"><strong>Transfer Vehicle Type: </strong> {{$quotationData->transferVehicleType}} </span>
                                                            <br/>
                                                        <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                        <span class="alert-text"><strong>Transfer Price: </strong> {{$quotationData->transferVehicleType}}</span>
                                                        <br/>
                                                </div>
                                                        <br/>
                                                        
                                                    @endif
                                            @endforeach
                                        </div>
                                     </div>

                                     <br/>

                                
                            </div>
                            <hr class="my-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
@endsection