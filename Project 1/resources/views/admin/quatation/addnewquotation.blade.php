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
              <li class="breadcrumb-item"><a href="/quotation">Quotation</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="/quotation/create"> Add a New Quotation</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Add a New Quotation</h6>
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
                  
                  <form method="POST" action="{{ route('quotation.store') }}">
                    @csrf <!-- {{ csrf_field() }} --> 

                  <input type="hidden" name="customerId" id="input-id" class="form-control" value="0">
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
                                <select class="form-control" name="customerName" id="inputcustomername" placeholder="Select Value" required>
                                   <option value="Select Customer Name">Select Customer Name</option>
                                    @foreach ( $customers as $customer )
                                      <option 
                                        dataEmail = "{{$customer->email}}" 
                                        dataContactNumber = "{{$customer->mobileNumber}}"
                                        dataId = "{{$customer->id}}" 
                                        title="{{  $customer->email }}" 
                                        value="{{  $customer->firstName . " ". $customer->lastName  }}">
  
                                          {{$customer->firstName . " ". $customer->lastName}}
  
                                      </option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-email">Email *</label>
                              <input type="email" name="email" id="input-email" class="form-control" placeholder="name@example.com">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-contact-no">Contact Phone *</label>
                              <input type="text" name="contactNumber" id="input-contact-no" class="form-control" placeholder="Contact Phone">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4" />
                      <!-- Address -->
                      <h6 class="heading-small text-muted mb-4">Quotation Details</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-title">Quotation Title / Details*</label>
                                  <input type="text" id="input-title" name="title" class="form-control" placeholder="Quotation Title / Details">
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
                        <button type="submit" name="submitValue" value="Create" class="btn btn-md btn-primary">Add Quotation</button>
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

    <script>
      $(document).ready(function() {
        $('#inputcustomername').select2();
      });

      $(function() { 
        $("#inputcustomername").change(function(){ 
            var element = $(this).find('option:selected'); 
            var dataEmail = element.attr("dataEmail"); 
            var dataContactNumber = element.attr("dataContactNumber"); 
            var dataId = element.attr("dataId"); 
            $('#input-email').val(dataEmail); 
            $('#input-contact-no').val(dataContactNumber); 
            $('#input-id').val(dataId); 
        });
 }); 
    </script>
      
@endsection