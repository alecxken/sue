 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MENTORSHIP<sup>SU</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{url('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Items
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Student Section</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Components:</h6>
            <a class="collapse-item" href="{{url('mentor')}}">Select Mentor</a>
            <a class="collapse-item" href="{{url('mentor')}}">Current Profile</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Mentors Section</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Your Options:</h6>
            <a class="collapse-item" href="{{url('')}}">View My Mentees</a>
            <a class="collapse-item" href="{{url('')}}">Special Request</a>
            <a class="collapse-item" href="{{url('')}}">My Profile</a>
         {{--    <a class="collapse-item" href="utilities-other.html">Other</a> --}}
          </div>
        </div>
      </li>

      <!-- Divider -->
      

          <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities-3" aria-expanded="true" aria-controls="collapseUtilities-3">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Admin Section</span>
        </a>
        <div id="collapseUtilities-3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Your Options:</h6>
            <a class="collapse-item" href="{{url('mentors')}}">Add Mentors</a>
            <a class="collapse-item" href="{{url('')}}">Add Users</a>
            <a class="collapse-item" href="{{url('category')}}">Category Settings</a>
         {{--    <a class="collapse-item" href="utilities-other.html">Other</a> --}}
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
      <!-- Heading -->
   

      <!-- Divider -->
  {{--     <hr class="sidebar-divider d-none d-md-block"> --}}

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>