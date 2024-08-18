      <!-- partial -->
      <div class="container-fluid page-body-wrapper ">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center ">
                  <div>
                    <div class="d-flex align-items-center">
                      <div class="sidebar-profile-img">
                        <img src='{{asset(session('image'))}}' width="30px" height="30px" class="rounded-circle border border-light border-5 " alt="image">
                      </div>
                      <div class="sidebar-profile-text">
                        <p class="mb-1">{{ session('name') }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{asset('adminpanel')}}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{asset('form')}}">
                <span class="icon-bg  text-warning"><i class="fa-solid fa-user-tie"></i></span>
                <span class="menu-title">Add Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('addWatch')}}">
                <span class="icon-bg text-warning"><i class="fa-solid fa-clock"></i></span>
                <span class="menu-title">Add Watches</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('watches')}}">
                <span class="icon-bg text-warning"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Watches</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('admins')}}">
                <span class="icon-bg text-warning"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Admins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('order')}}">
                <span class="icon-bg text-warning"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Orders</span>
              </a>
            </li>
           </ul>
        </nav>