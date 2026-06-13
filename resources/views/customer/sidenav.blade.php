 <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo"style="padding-left:0;">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark"style="padding-left:0;">
           

   <a href="index.html" class="logo d-flex align-items-center gap-2 text-decoration-none">

    <img
    src="{{ asset('dashboard/assets/img/logo.png') }}"
    class="rounded-circle object-fit-cover"
    style="width:70px; height:70px; margin-left:0;"
>

    <h4 class="fw-bold mb-0 text-warning">
        Blink<span class="text-white">Burger</span>
    </h4>

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
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active  ">
                <a href="admindashboard" class="text-center d-block "style="color:white !important ;">
    Customer Dashboard
</a>
                
              <li class="nav-item">
    <a href="update">
        <i class="fas fa-user-edit"></i>
        <p>Update Profile</p>
    </a>
</li>

<li class="nav-item">
    <a href="/order-history">
        <i class="fas fa-shopping-bag"></i>
        <p>Order History</p>
    </a>
</li>

<li class="nav-item">
    <a href="/favourite">
        <i class="fas fa-heart"></i>
        <p>Favourite Items</p>
    </a>
</li>

<li class="nav-item">
    <a href="/membership">
        <i class="fas fa-crown"></i>
        <p>Membership</p>
    </a>
</li>

<li class="nav-item">
    <a href="/saved-address">
        <i class="fas fa-map-marker-alt"></i>
        <p>Saved Address</p>
    </a>
</li>

<li class="nav-item">
    <a href="/coupon">
        <i class="fas fa-tags"></i>
        <p>Coupons</p>
    </a>
</li>

<li class="nav-item">

    <a data-bs-toggle="collapse" href="#complaintSection">

        <i class="fas fa-headset"></i>

        <p>Complaint</p>

        <span class="caret"></span>

    </a>

    <div class="collapse" id="complaintSection">

        <ul class="nav nav-collapse">

            <li>
                <a href="/new-complaint">

                    <span class="sub-item">
                        New Complaint
                    </span>

                </a>
            </li>

            <li>
                <a href="/complaint-history">

                    <span class="sub-item">
                        Complaint History
                    </span>

                </a>
            </li>

        </ul>

    </div>

</li>
              
              
            </ul>
          </div>
        </div>
      </div>

      <!-- topnav bar  -->
       