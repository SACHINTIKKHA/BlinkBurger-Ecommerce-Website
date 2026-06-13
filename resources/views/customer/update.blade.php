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

                        <a href="index" class="nav-link active fw-semibold text-white">

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

<style>

.profile-card{
    max-width: 700px;
    margin: 30px auto;
    border-radius: 12px;
    border: none;
    overflow: hidden;
    margin-top:70px
}

.card-header{
    background-color: #1f283e !important;
    color: white;
    padding: 14px;
}

.form-control,
.form-select{
    border-radius: 8px;
    padding: 8px;
    font-size: 14px;
}

.btn-update{
    width: 100%;
    background-color: #1f283e;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 8px;
    font-weight: bold;
}

.btn-update:hover{
    background-color: #ffc107;
    color: black;
}

label{
    font-size: 14px;
    font-weight: 600;
}

</style>

<div class="page-inner">

    <div class="container">

        <div class="card shadow profile-card">

            <div class="card-header">

                <h3 class="text-center fw-bold mb-0">
                    Update Profile
                </h3>

            </div>

            <div class="card-body p-3">

                <form action="changecustomer" method="POST">

                    @csrf

                    <div class="row">

                        <div class="col-md-6 mb-2">

                            <label>First Name</label>

                            <input
                                type="text"
                                name="firstname"
                                class="form-control"
                                value="{{ $customer->firstname }}"
                            >

                        </div>

                        <div class="col-md-6 mb-2">

                            <label>Last Name</label>

                            <input
                                type="text"
                                name="lastname"
                                class="form-control"
                                value="{{ $customer->lastname }}"
                            >

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-2">

                            <label>Email</label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ $customer->email }}"disabled
                            >

                        </div>

                        <div class="col-md-6 mb-2">

                            <label>Gender</label>

                            <select
                                name="gender"
                                class="form-select"
                            >

                                <option value="Male"
                                {{ $customer->gender == 'Male' ? 'selected' : '' }}>
                                    Male
                                </option>

                                <option value="Female"
                                {{ $customer->gender == 'Female' ? 'selected' : '' }}>
                                    Female
                                </option>

                            </select>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-2">

                            <label>Contact</label>

                            <input
                                type="text"
                                name="contact"
                                class="form-control"
                                value="{{ $customer->contact }}" disabled
                            >

                        </div>

                        <div class="col-md-6 mb-2">

                            <label>DOB</label>

                            <input
                                type="date"
                                name="dob"
                                class="form-control"
                                value="{{ $customer->dob }}"
                            >

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-2">

                            <label>City</label>

                            <input
                                type="text"
                                name="city"
                                class="form-control"
                                value="{{ $customer->city }}"
                            >

                        </div>

                        <div class="col-md-6 mb-2">

                            <label>Pincode</label>

                            <input
                                type="text"
                                name="pincode"
                                class="form-control"
                                value="{{ $customer->pincode }}"
                            >

                        </div>

                    </div>

                    <div class="mb-3">

                        <label>Address</label>

                        <textarea
                            name="address"
                            class="form-control"
                            rows="3"
                        >{{ $customer->address }}</textarea>

                    </div>

                    <button type="submit" class="btn-update">
                        Update Profile
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</div>

@endsection