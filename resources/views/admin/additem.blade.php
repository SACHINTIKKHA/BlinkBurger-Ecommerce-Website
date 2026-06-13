@extends('admin.layout')

@section('main')

<div class="main-panel">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3 shadow-sm"
        style="background-color:#1f283e;">

        <div class="container-fluid">

            <a class="navbar-brand fw-bold" href="#">
                Admin Panel
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-center gap-3">

                    <li class="nav-item">
                        <a href="index" class="nav-link active">
                            <i class="fas fa-home me-2"></i>
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/logout"
                            class="btn btn-warning rounded-pill px-4 fw-bold">

                            <i class="fas fa-sign-out-alt me-2"></i>
                            Logout

                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- Main Content -->
    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="card border-0 shadow-lg overflow-hidden">

                    <div class="row g-0">

                        <!-- Left Image -->
                        <div class="col-md-5">

                            <img src="{{ asset('img/menu/6.jpg') }}"
                                class="img-fluid h-100 w-100"
                                style="object-fit:cover;">

                        </div>

                        <!-- Right Form -->
                        <div class="col-md-7 bg-white">

                            <div class="p-5">

                                <h3 class="text-center mb-4 fw-bold">
                                    ➕ Add New Item
                                </h3>

                               <form action="addnewitem"
    method="POST"
    enctype="multipart/form-data">

    @csrf

    <div class="row">

        <!-- Title -->
        <div class="col-md-6 mb-3">

            <label class="form-label fw-semibold">
                Title
            </label>

            <input type="text"
                name="title"
                class="form-control"
                placeholder="Enter item title"
                required>

        </div>

        <!-- Price -->
        <div class="col-md-6 mb-3">

            <label class="form-label fw-semibold">
                Price
            </label>

            <input type="number"
                name="amount"
                class="form-control"
                placeholder="Enter item price"
                required>

        </div>

        <!-- Type -->
        <div class="col-md-6 mb-3">

            <label class="form-label fw-semibold">
                Type
            </label>

            <select name="type"
                class="form-select"
                required>

                <option value="" selected disabled>
                    Select Type
                </option>

                <option value="burger">Burger</option>
                <option value="momos">Momos</option>
                <option value="chaap">Chaap</option>
                <option value="roll">Roll</option>
                <option value="rice">Rice</option>
                <option value="chowmein">Chowmein</option>

            </select>

        </div>

        <!-- Category -->
        <div class="col-md-6 mb-3">

            <label class="form-label fw-semibold">
                Category
            </label>

            <select name="mode"
                class="form-select"
                required>

                <option value="" selected disabled>
                    Select Category
                </option>

                <option value="veg">
                    Veg 🌱
                </option>

            </select>

        </div>

        <!-- Description -->
        <div class="col-12 mb-3">

            <label class="form-label fw-semibold">
                Description
            </label>

            <textarea name="description"
                class="form-control"
                rows="4"
                placeholder="Enter item description"></textarea>

        </div>

        <!-- Image Upload -->
        <div class="col-12 mb-4">

            <label class="form-label fw-semibold">
                Upload Image
            </label>

            <input type="file"
                name="image"
                class="form-control"
                accept="image/*">

        </div>

        <!-- Submit Button -->
        <div class="col-12">

            <div class="d-grid">

                <button type="submit"
                    class="btn btn-dark py-2 fw-bold">

                    Add Item

                </button>

            </div>

        </div>

    </div>

</form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection