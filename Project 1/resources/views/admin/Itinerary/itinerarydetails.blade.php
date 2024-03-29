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
              <li class="breadcrumb-item"><a href="/itinerary">Itinerary</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="/itinerary/create">Itinerary Details</a></li>
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
                            <h4 class="h2 d-inline-block mb-0">Itinerary for <b>{{ $itineraries->firstName . " " . $itineraries->lastName}} </b> | {{$itineraries->title}}</h4>
                            <h6 class="h2 d-inline-block mb-0">{{$itineraries->toDate . " - " . $itineraries->fromDate}}</h6>
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
                            $("#main-it").load("../../addHotel?id={{$itineraries->id}}");
                        });

                        $("#btnFlight").click(function(){
                            $("#main-it").load("../../addFlight?id={{$itineraries->id}}");
                        });

                        $("#btnCustom").click(function(){
                            $("#main-it").load("../../addCustomItem?id={{$itineraries->id}}");
                        });

                        $("#btnActivities").click(function(){
                            $("#main-it").load("../../addActivity?id={{$itineraries->id}}");
                        });

                        $("#btnTransfer").click(function(){
                            $("#main-it").load("../../addTransfer?id={{$itineraries->id}}");
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
                            @if($itineraryDetails->isEmpty())
                                <h6 class="heading-small text-muted mb-4 text-center">Add Items to Itinerary</h6>
                            @endif

                            <div class="pl-lg-4">
                                <?php 
                                    $date = new DateTime($itineraries->fromDate);
                                    $dateString = $date->format('Y-m-d');
                                ?>
                                @for ($days = 1; $days <= $itineraries->duration; $days++)
                                    <div class="card card-frame">
                                        <div class="card-body">
                                            <span class="text-gradient text-primary text-uppercase font-weight-bold my-2">
                                                Day {{$days}} |  {{$dateString}}
                                            </span>
                                                <?php
                                                    $date = new DateTime($dateString);
                                                    $date->modify('+1 day');
                                                    $dateString = $date->format('Y-m-d');
                                                ?>
                                        </div>
                                     </div>

                                     <div class="card card-frame red">
                                        <div class="card-body">
                                            @foreach ($itineraryDetails as $itineraryData)
                                                @if ($itineraryData->itinerarieDay == $days)
                                                    @if($itineraryData->itinerarieTypeId == "1") <!-- Hotel -->
                                                    
                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <span class="alert-icon"><i class="fa fa-hotel"></i></span>
                                                        <span class="alert-text"><strong>Hotel Name & Address: </strong> {{$itineraryData->hotelName}} , {{$itineraryData->hotelAddress}}</span>
                                                            <br/>
                                                            
                                                        <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                        <span class="alert-text"><strong>Stay In: </strong> {{$itineraryData->hotelNoOfNights}} Night(s)</span>
                                                            |
                                                        <span class="alert-text"><strong>Hotel Rooms: </strong> {{$itineraryData->hotelRooms}}</span>
                                                            <br/>

                                                        <span class="alert-icon"><i class="fa fa-person-booth"></i></span>
                                                        <span class="alert-text"><strong>Hotel Room Type: </strong> {{$itineraryData->hotelRoomType}}</span>
                                                          | 
                                                        <span class="alert-icon"><i class="fa fa-utensils"></i></span>
                                                        <span class="alert-text"><strong>Hotel Meal Type: </strong> {{$itineraryData->hotelMealType}}</span>
                                                            <br/>

                                                        <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                        <span class="alert-text"><strong>Hotel Price: </strong> {{$itineraryData->hotelPrice}}</span>
                                                            <br/>
                                                    </div>
                                                            <br/>

                                                    @elseif ($itineraryData->itinerarieTypeId == "2") <!-- Flight -->
                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <span class="alert-icon"><i class="fa fa-plane"></i></span>
                                                        <span class="alert-text"><strong>Flight Type: </strong> {{$itineraryData->flightType}}</span>
                                                            <br/>
                                                            
                                                        <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                        <span class="alert-text"><strong>From: </strong> {{$itineraryData->flightFrom}} </span> | 
                                                        <span class="alert-text"><strong>To: </strong> {{$itineraryData->flightTo}} </span>
                                                            <br/>
                                                        <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                        <span class="alert-text"><strong>Flight Price: </strong> {{$itineraryData->flightPrice}}</span>
                                                            <br/>
                                                    </div>
                                                            <br/>

                                                    @elseif ($itineraryData->itinerarieTypeId == "3") <!-- Custom -->

                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                                                        <span class="alert-text"><strong>Custom Name and Location </strong> {{$itineraryData->customItemName}}, {{$itineraryData->customLocation}}</span>
                                                            <br/>
                                                            
                                                        <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                        <span class="alert-text"><strong>Custom Item Type: </strong> {{$itineraryData->customItemType}} </span>
                                                            <br/>
                                                        <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                        <span class="alert-text"><strong>Custom Price: </strong> {{$itineraryData->customPrice}}</span>
                                                            <br/>
                                                    </div>
                                                            <br/>

                                                    @elseif ($itineraryData->itinerarieTypeId == "4") <!-- Activities -->

                                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                            <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                                                            <span class="alert-text"><strong>Activity and Location </strong> {{$itineraryData->activitiesName}}, {{$itineraryData->activitiesAddress}}</span>
                                                                <br/>
                                                                
                                                            <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                            <span class="alert-text"><strong>Activity Type: </strong> {{$itineraryData->activitiesActivityType}} </span>
                                                                <br/>
                                                            <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                            <span class="alert-text"><strong>Custom Price: </strong> {{$itineraryData->activitiesPrice}}</span>
                                                            <br/>
                                                    </div>
                                                            <br/>
                                                        
                                                    @elseif ($itineraryData->itinerarieTypeId == "5") <!-- Transfer -->

                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                                                        <span class="alert-text"><strong>Transfer Pick Up and Drop Location </strong> {{$itineraryData->transferPickupLocation}} <i class="fas fa-arrow-right"></i> {{$itineraryData->transfeDropLocationr}}</span>
                                                            <br/>
                                                            
                                                        <span class="alert-icon"><i class="far fa-moon"></i></span>
                                                        <span class="alert-text"><strong>Transfer Vehicle Type: </strong> {{$itineraryData->transferVehicleType}} </span>
                                                            <br/>
                                                        <span class="alert-icon"><i class="fa fa-money"></i></span>
                                                        <span class="alert-text"><strong>Transfer Price: </strong> {{$itineraryData->transferVehicleType}}</span>
                                                        <br/>
                                                </div>
                                                        <br/>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                     </div>

                                     <br/>
                                @endfor

                                
                            </div>
                            <hr class="my-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
@endsection