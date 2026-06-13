@extends('layout')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login UI</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        

        .left-side{
            background:#0d6efd;
            color:white;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            padding:40px;
        }

        .left-side h1{
            font-size:45px;
            font-weight:bold;
        }

        .right-side{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#f8f9fa;
        }

        .login-box{
            width:100%;
            max-width:400px;
            background:white;
            padding:35px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
        }

        .btn-login{
            width:100%;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

<div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">

    <a class="navbar-brand text-decoration-none" href="#">

        <div class="blogo d-flex align-items-center gap-3 mb-4 mt-4">

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

    <h1 class="htitle text-center">
        Login ,
        <span class="hl">Order</span>
        <br>
        and Eat
    </h1>

    <p class="hdesc text-center">
        Grab the offer . So no need to wait just login , search , order and enjoy your meal .
        Enjoy your 7 minute fast delivery and under just @39 for first order.So don't wait login fast.
    </p>

</div>

        <!-- Right Section -->
        <div class="col-lg-6 right-side">

            <div class="login-box">

                <h2 class="text-center mb-4">Login</h2>

                <form action="loginuser" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-login">
                        Login
                    </button>

                    <p class="text-center mt-3">
                        Don't have an account?
                        <a href="register">Register</a><br>
                        <a href="forgot">Forgot Password</a>
                         
                    </p>

                </form>

            </div>

        </div>

    </div>
</div>

</body>
</html>



@endsection