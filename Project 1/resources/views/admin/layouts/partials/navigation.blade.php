<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('dashboard') }}">
                <i class="text-primary fas fa-tachometer-alt"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          </ul>
      
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/inquiry">
                <i class="text-primary far fa-comments"></i>
                <span class="nav-link-text">Inquiry</span>
              </a>
            </li>
          </ul>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="text-primary fas fa-file-invoice"></i>
                <span class="nav-link-text">Itinerary</span>
              </a>
            </li>
          </ul>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="text-primary fas fa-business-time"></i>
                <span class="nav-link-text">Quotation</span>
              </a>
            </li>
          </ul>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/customer">
                <i class="text-primary fas fa-users"></i>
                <span class="nav-link-text">Customers</span>
              </a>
            </li>
          </ul>


          
        </div>
      </div>
    </div>
  </nav>