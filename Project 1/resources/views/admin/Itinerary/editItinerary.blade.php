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
              <li class="breadcrumb-item active" aria-current="page"><a href="/itinerary/{{ $itinerary->id }}/edit">Edit Itinerary</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Edit Itinerary</h6>
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
                  
                  <form method="POST" action="{{ route('itinerary.update', $itinerary->id) }}">
                    @csrf <!-- {{ csrf_field() }} --> 
                    @method('PUT')

                  <input type="hidden" name="customerId" id="input-id" class="form-control" value="{{$itinerary->customerId}}">
                      @if (count($errors) > 0)
                          <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div>
                      @endif
                  <div class="card-body">
                      <h6 class="heading-small text-muted mb-4">Customer Details</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="inputcustomername">Customer * (e.g. Firstname Lastname)</label>
                              <select class="form-control" name="customerName" id="inputcustomername" placeholder="Select Value" required readonly>
                                 <option value="Select Customer Name">{{ $itinerary->firstName . " " . $itinerary->lastName }}</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-email">Email *</label>
                              <input type="email" name="email" id="input-email" class="form-control" value="{{ $itinerary->email }}" required readonly>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-contact-no">Contact Phone *</label>
                              <input type="text" name="contactNo" value="{{$itinerary->mobileNumber}}" id="input-contact-no" class="form-control" required readonly>
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
                                  <label class="form-control-label" for="input-itinerary-title">Itinerary Title / Details*</label>
                                  <input type="text" id="input-itinerary-title" class="form-control" value="{{$itinerary->title}}" name="itineraryTitle" placeholder="Itinerary Title / Details">
                                </div>
                              </div>
                            

                          <div class="col-lg-2">
                            <div class="form-group">
                                <label class="form-control-label" for="input-from-Date">From Date</label>
                                <input onChange="getDate(1);" name="fromDate" type="date" value="{{$itinerary->fromDate}}" id="input-from-Date" class="form-control" placeholder="From Date" >
                              </div>
                          </div>

                          <script>


                          </script>

                            

                          <div class="col-lg-2">
                            <div class="form-group">
                                <label class="form-control-label" for="input-to-Date">To Date</label>
                                <input onChange="getDate();" name="toDate" type="date" id="input-to-Date" value="{{$itinerary->toDate}}" class="form-control" placeholder="To Date">
                              </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-duration">Duration (Nights)*</label>
                                <input type="text" id="input-duration" name="duration" value="{{$itinerary->duration}}" class="form-control" placeholder="0" readonly>
                              </div>
                        </div>

                        <script>

                          function getDate(data) {
                              var fromDate = document.getElementById("input-from-Date").value;
                              var toDate = document.getElementById("input-to-Date").value;
                            
                              var date1 = new Date(fromDate);
                              var date2 = new Date(toDate);
                              var diffTime = Math.abs(date2 - date1);
                              var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                              var dd = date1.getDate()+1;
                              var mm = date1.getMonth()+1;
                              var yyyy = date1.getFullYear();
                                
                                if(dd<10){
                                  dd='0'+dd
                                } 
                                if(mm<10){
                                  mm='0'+mm
                                } 

                              date1 = yyyy+'-'+mm+'-'+dd;
                              document.getElementById("input-to-Date").setAttribute("min", date1);


                              var today = new Date();
                              var dd = today.getDate()+1;
                              var mm = today.getMonth()+1;
                              var yyyy = today.getFullYear();
                                
                                if(dd<10){
                                  dd='0'+dd
                                } 
                                if(mm<10){
                                  mm='0'+mm
                                } 

                                today = yyyy+'-'+mm+'-'+dd;

                              
                              document.getElementById("input-from-Date").setAttribute("min", today);

                              
                              document.getElementById("input-duration").value = diffDays;

                              if(data){
                                document.getElementById("input-to-Date").value = "";
                                document.getElementById("input-duration").value = "0";
                              }

                              



                          }


                        </script>
                      
                      </div>
                      <hr class="my-4" />
                  </div>
                  

                  <div class="card-footer">
                    <div class="row align-items-center">
                      <div class="col-8">
                      </div>
                      <div class="col-4 text-right">
                        <button type="submit" class="btn btn-md btn-primary" name="submitValue" value="Update">Update Itinerary</button>
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