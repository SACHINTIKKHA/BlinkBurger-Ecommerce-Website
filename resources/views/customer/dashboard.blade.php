@extends('customer.layout')
@section('main')
   
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header" >
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="dashboard/assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
         <nav
    class="navbar navbar-expand-lg px-4 py-3 shadow-sm"
    id="topbar"
    style="background-color:#1f283e;"
>


    <!-- Toggle Button -->
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Right Side -->
    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ms-auto align-items-center gap-3">

            <!-- Home -->
            <li class="nav-item">
                <a href="index" class="nav-link active fw-semibold">

                    <i class="fas fa-home me-2"></i>
                    Home

                </a>
            </li>

            <!-- Logout -->
            <li class="nav-item">

                <a href="logout" class="btn btn-warning rounded-pill px-4 fw-bold">

                    <i class="fas fa-sign-out-alt me-2"></i>
                    Logout

                </a>

            </li>

        </ul>

    </div>

</nav>

          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">Hii {{session('firstname')}} {{session('lastname')}}</h6>
              </div>
            </div>
           
                  
              
                
           
@endsection
       
