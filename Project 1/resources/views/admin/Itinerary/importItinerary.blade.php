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
              <li class="breadcrumb-item"><a href="{{ route('inquiry') }}">Inquiry</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('importinquiry') }}">Import Inquiry</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Import Inquiry</h6>
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
          <div class="card bg-default">
            <div class="card-header bg-transparent">
                <form>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input fileImport" id="customFileLang" lang="en">
                                <label class="custom-file-label" for="customFileLang">Select Itinerary XLSX file</label>
                            </div>
                        </div>
                        <div class="col text-right">
                            <button type="submit" class="btn btn-md btn-primary">Import Itinerary</button>
                            <button type="submit" class="btn btn-md btn-primary">Download Template</button>
                            <a href=""><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </form>
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
                  </tr>

                  

                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
      
@endsection