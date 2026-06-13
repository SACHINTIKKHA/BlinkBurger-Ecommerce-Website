@extends('admin.layout')
@section('main')
    
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

                <a href="/logout" class="btn btn-warning rounded-pill px-4 fw-bold">

                    <i class="fas fa-sign-out-alt me-2"></i>
                    Logout

                </a>

            </li>

        </ul>

    </div>

</nav>

</div>
<!-- End Navbar -->


<div class="container">
    <div class="card shadow offer-card">

       <div class="card-header bg-dark">

    <h3 class="text-white text-center fw-bold mb-0">
        Offer Management
    </h3>

</div>

        <div class="card-body p-4">

            <form action="addoffer" method="post">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Offer Title</label>
                        <input type="text" class="form-control" placeholder="Enter offer title" name="title">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Discount (%)</label>
                        <input type="number" class="form-control" placeholder="Enter discount"name="discount">
                    </div>

                </div>

                <div class="mb-3">
                    <label class="form-label">Offer Code</label>
                    <input type="text" class="form-control" placeholder="#OFFER0011"name="offercode">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Write offer description"name="description"></textarea>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="date" class="form-control"name="startdate">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">End Date</label>
                        <input type="date" class="form-control"name="enddate">
                    </div>

                </div>

                <button type="submit" class="btn-offer">
                    Add Offer
                </button>

            </form>

        </div>

    </div>
</div>



@endsection