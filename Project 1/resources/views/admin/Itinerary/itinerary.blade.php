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
                  <a href="/itinerary/create" class="btn btn-sm btn-primary text-white">Add a new Itinerary</a>
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
                  @foreach ($itineraries as $itinerary)
                  <tr>
                    <th scope="row">
                      <a href="" class="no-style"> {{ $itinerary->title }}  <i class="fas fa-copy"></i></a>
                    </th>
                    <td>
                      {{ $itinerary->id }}
                    </td>
                    <td>
                      {{ $itinerary->toDate }}
                    </td>
                    <td>
                      {{ $itinerary->duration }}
                    </td>
                    <td>
                      {{ $itinerary->firstName . " " . $itinerary->lastName }}
                    </td>
                    <td>
                      {{ $itinerary->email }}
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle item-color" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu item-color item-color" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item item-color" href="/itinerary/{{$itinerary->id}}/edit">Edit Itinerary</a>
                          <a class="dropdown-item item-color" href="/itinerary/{{$itinerary->id}}">View Itinerary</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
      
@endsection