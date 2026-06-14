<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt UI</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 mx-auto" style="max-width:400px;">

        <h3 class="text-center mb-4">Receipt</h3>

        <div class="d-flex justify-content-between">
            <span>Amount</span>
            <span>{{$net}}</span>
        </div>

        <div class="d-flex justify-content-between mt-2">
            <span>CGST 2.5%</span>
            <span>₹{{$sgst}}</span>
        </div>
        
        <div class="d-flex justify-content-between mt-2">
            <span>SGST 2.5%</span>
            <span>₹{{$sgst}}</span>
        </div>
        <hr>
         <div class="d-flex justify-content-between mt-1 fw-bold">
        <span>Net Amount</span>
        <span>₹{{$netamount}}</span>
        </div>


        <div class="mt-3">
            <form action="coupan" method="action">
                @csrf
            <input type="text"
                   class="form-control"
                   placeholder="Enter Coupon Code">

            <button class="btn btn-primary w-100 mt-2">
                Apply Coupon
            </button>
            @if(session('error'))
            <div class="alert alert-dannger">

            {{session('error')}}
</div>
@endif
</form>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <span>Discount</span>
            <span>₹0</span>
        </div>

        <hr>

        <div class="d-flex justify-content-between fw-bold">
            <span>Final Amount</span>
            <span>₹{{$netamount}}</span>
        </div>

        <button class="btn btn-success w-100 mt-4">
            Proceed To Pay
        </button>

    </div>

</div>

</body>
</html>