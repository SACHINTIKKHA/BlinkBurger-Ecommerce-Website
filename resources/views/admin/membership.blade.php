@extends('customer.layout')

@section('main')

<div class="main-panel">

    <div class="main-header">

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

        <!-- Navbar -->
        <nav
            class="navbar navbar-expand-lg px-4 py-3 shadow-sm"
            id="topbar"
            style="background-color:#1f283e;"
        >

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-center gap-3">

                    <li class="nav-item">

                        <a href="index" class="nav-link active fw-semibold text-white">

                            <i class="fas fa-home me-2"></i>
                            Home

                        </a>

                    </li>

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

<style>

.offer-card{
    max-width: 750px;
    margin: 40px auto;
    border-radius: 15px;
    overflow: hidden;
    border: none;
    background: white;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.offer-header{
    background: linear-gradient(135deg,#1f283e,#2d3d5c);
    padding: 18px;
    text-align: center;
    margin-top:0px;
}

.offer-header h3{
    color: white;
    font-weight: bold;
    margin: 0;
}

.offer-body{
    padding: 30px;
    
}

.form-label{
    font-weight: 600;
    color: #1f283e;
    margin-bottom: 8px;
}

.form-control{
    border-radius: 10px;
    padding: 12px;
    border: 1px solid #ced4da;
    transition: 0.3s;
}

.form-control:focus{
    border-color: #1f283e;
    box-shadow: 0 0 10px rgba(31,40,62,0.2);
}

textarea{
    resize: none;
}

.submit-btn{
    width: 100%;
    border: none;
    padding: 12px;
    border-radius: 10px;
    background: #1f283e;
    color: white;
    font-weight: bold;
    font-size: 17px;
    transition: 0.3s;
}

.submit-btn:hover{
    background: #ffc107;
    color: black;
    transform: translateY(-2px);
}

</style>



    <div class="container">

        <div class="card offer-card">

            <!-- Header -->
            <div class="offer-header">

                <h3>Create Offer</h3>

            </div>

            <!-- Body -->
            <div class="offer-body">

                <form action="addmembership" method="POST">

                    @csrf

                    <!-- Title -->
                    <div class="mb-3">

                        <label class="form-label">Membership Card</label>

                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            placeholder="Enter offer title"
                        >

                    </div>

                    <!-- Description -->
                    <div class="mb-3">

                        <label class="form-label">Description</label>

                        <textarea
                            name="description"
                            rows="2"
                            class="form-control"
                            placeholder="Enter offer description"
                        ></textarea>

                    </div>

                    <div class="row">

                        <!-- Percentage -->
                        <div class="col-md-6 mb-3">

                            <label class="form-label">Discount Percentage</label>

                            <input
                                type="percentage"
                                name="percentage"
                                class="form-control"
                                placeholder="Enter percentage"
                            >

                        </div>

                        <!-- Amount -->
                        <div class="col-md-6 mb-3">

                            <label class="form-label">Amount</label>

                            <input
                                type="amount"
                                name="amount"
                                class="form-control"
                                placeholder="Enter amount"
                            >

                        </div>

                    </div>

                    <!-- Validity -->
                    <div class="mb-4">

                        <label class="form-label">Validity</label>

                        <input
                            type="validity"
                            name="validity"
                            class="form-control"
                        >

                    </div>

                    <!-- Button -->
                    <button type="submit" class="submit-btn">

                        Create 

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</div>

@endsection