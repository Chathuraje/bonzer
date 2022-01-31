
@include('admin.layouts.partials.header')
@include('admin.layouts.partials.navigation')
 
  <!-- Main content -->
  <div class="main-content" id="panel">

    
    @include('admin.layouts.partials.topnav')

    @yield('subcontent')

    @yield('content')


  </div>

@include('admin.layouts.partials.footer')
