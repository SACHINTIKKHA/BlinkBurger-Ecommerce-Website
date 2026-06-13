@extends('layout')

@section('main')

<div class="container">

    <div class="row align-items-center g-5" style="min-height:88vh;">

        <!-- LEFT SIDE -->
        <div class="col-lg-6">

            <a class="navbar-brand text-decoration-none" href="#">

                <div class="blogo d-flex align-items-center gap-3 mb-4">

                    <div class="bico">
                        <i class="fas fa-utensils"></i>
                    </div>

                    <div>
                        <div class="bname">
                            Blink<span>burger</span>
                        </div>

                        <div class="bsub">
                            Buy, Track and Review
                        </div>
                    </div>

                </div>

            </a>

            <h1 class="htitle">
                Delicious
                <span class="hl">Fast Food</span>
                <br>
                for Every Moment
            </h1>

            <p class="hdesc">
                Experience bold flavors crafted from premium ingredients.
                From crispy burgers to gourmet pizzas — every bite is an
                adventure worth savoring.
            </p>

        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-6">

            <div class="card shadow border-0 p-4 rounded-4">

                <h3 class="text-center mb-4">
                    Register Here
                </h3>

                <form action="{{ url('registerdata') }}" method="POST">

                    @csrf

                    <div class="row">

                        <!-- First Name -->
                        <div class="col-md-6 mb-3">

                            <input type="text"
                                   name="firstname"
                                   class="form-control"
                                   placeholder="First Name">

                            @error('firstname')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Last Name -->
                        <div class="col-md-6 mb-3">

                            <input type="text"
                                   name="lastname"
                                   class="form-control"
                                   placeholder="Last Name">

                            @error('lastname')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Email Address">

                            @error('email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Mobile -->
                        <div class="col-md-6 mb-3">

                            <input type="number"
                                   name="contact"
                                   class="form-control"
                                   placeholder="Mobile Number">

                            @error('contact')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- DOB -->
                        <div class="col-md-6 mb-3">

                            <input type="date"
                                   name="dob"
                                   class="form-control">

                            @error('dob')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Gender -->
                        <div class="col-md-6 mb-3">

                            <select name="gender"
                                    class="form-control">

                                <option value="">
                                    Select Gender
                                </option>

                                <option value="Male">
                                    Male
                                </option>

                                <option value="Female">
                                    Female
                                </option>

                                <option value="Other">
                                    Other
                                </option>

                            </select>

                            @error('gender')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- City -->
                        <div class="col-md-6 mb-3">

                            <input type="text"
                                   name="city"
                                   class="form-control"
                                   placeholder="City">

                            @error('city')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Pincode -->
                        <div class="col-md-6 mb-3">

                            <input type="number"
                                   name="pincode"
                                   class="form-control"
                                   placeholder="Pincode">

                            @error('pincode')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Address -->
                        <div class="col-12 mb-3">

                            <textarea name="address"
                                      rows="3"
                                      class="form-control"
                                      placeholder="Full Address"></textarea>

                            @error('address')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Password -->
                        <div class="col-md-6 mb-3">

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Password">

                          

                        </div>

                        <!-- Confirm Password -->
                        <div class="col-md-6 mb-3">

                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control"
                                   placeholder="Confirm Password">

                        </div>

                        <!-- Submit -->
                        <div class="col-12">

                            <button type="submit"
                                    class="btn btn-danger w-100">

                                Register Now

                            </button>

                        </div>
@error('password')
<span class="text-danger">{{$message}}</span>
@enderror
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection