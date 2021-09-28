 
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <h2>NICN CMS</h2>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="{{ url('/') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ url('case-form') }}">
                <i class="ni ni-collection text-primary"></i>
                <span class="nav-link-text">Add New Case</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cases') }}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">View All Cases</span>
              </a>
            </li>
            
            <li class="nav-item">
              <!--
                {{ $myId = Auth::user()->id }}
              -->
              <a class="nav-link " href="{{ url("/system-user/{$myId}") }}">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Learn the System</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">User Guide</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" >
                <i class="ni ni-user-run text-red"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>