
        <div class="d-flex flex-column flex-shrink-1 p-3 text-black bg-dark" 
            style="width: 280px; height: 100vh;height: -webkit-fill-available; position: fixed;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  
                  <span class="fs-4">Sidebar</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                  <li class="nav-item">
                    <a href="{{ url('/register') }}" class="nav-link active" aria-current="page">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/case-form') }}" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                      Add New Case
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/cases') }}" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                      View All Cases
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                      Cases Return
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                      System Users
                    </a>
                  </li>
                </ul>
                
                
              </div>
  



