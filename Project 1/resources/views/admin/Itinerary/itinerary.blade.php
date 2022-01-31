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
              <!--<li class="breadcrumb-item active" aria-current="page">Default</li>-->
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Itinerary</h6>
        </div>
      </div>
      <!-- Card stats -->
      <div class="row">
       
      </div>
    </div>
  </div>
</div>

@endsection


@section('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 text-white">All Itinerary</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary text-white">Filters</a>
                  <a href="{{ route('addnewitinerary') }}" class="btn btn-sm btn-primary text-white">Add a new Itinerary</a>
                  <a href="#!" class="btn btn-sm btn-primary text-white">Export</a>
                  <a href="{{ route('importitinerary') }}" class="btn btn-sm btn-primary text-white">Import Itinerary</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Itinerary Name</th>
                    <th scope="col" class="sort" data-sort="name">Start Date</th>
                    <th scope="col" class="sort" data-sort="name">End Date</th>
                    <th scope="col" class="sort" data-sort="name">No of Days</th>
                    <th scope="col" class="sort" data-sort="name">Customer Name</th>
                    <th scope="col" class="sort" data-sort="name">Customer Email</th>
                    <th scope="col" class="sort" data-sort="name">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <a href="" class="no-style"> Test Itinerary <i class="fas fa-copy"></i></a>
                    </th>
                    <td>
                      2021-12-05
                    </td>
                    <td>
                      2021-12-05
                    </td>
                    <td>
                      5 Days
                    </td>
                    <td>
                      Chathura Ekanayake
                    </td>
                    <td>
                      chathuraje05@gmail.com
                    </td>
                    <td>
                     <a href=""> <i class="fas fa-trash-alt"></i></a>	&nbsp;
                     <a href="{{ route('itinerarydetails') }}"> <i class="fas fa-eye"></i></a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <a href="" class="no-style"> Test Itinerary <i class="fas fa-copy"></i></a>
                    </th>
                    <td>
                      2021-12-05
                    </td>
                    <td>
                      2021-12-05
                    </td>
                    <td>
                      5 Days
                    </td>
                    <td>
                      Chathura Ekanayake
                    </td>
                    <td>
                      chathuraje05@gmail.com
                    </td>
                    <td>
                     <a href=""> <i class="fas fa-trash-alt"></i></a>	&nbsp;
                     <a href=""> <i class="fas fa-eye"></i></a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <a href="" class="no-style"> Test Itinerary <i class="fas fa-copy"></i></a>
                      <a href=""> <i class="fas fa-eye"></i></a>
                    </th>
                    <td>
                      2021-12-05
                    </td>
                    <td>
                      2021-12-05
                    </td>
                    <td>
                      5 Days
                    </td>
                    <td>
                      Chathura Ekanayake
                    </td>
                    <td>
                      chathuraje05@gmail.com
                    </td>
                    <td>
                     <a href=""> <i class="fas fa-trash-alt"></i></a>	&nbsp;
                     <a href=""> <i class="fas fa-eye"></i></a>
                    </td>
                  </tr>

                  

                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
      
@endsection