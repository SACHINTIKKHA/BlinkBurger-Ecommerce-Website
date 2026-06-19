@extends('layout')
@section('main')



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
        Grab,
        <span class="hl">Discount</span>
        <br>
        and Eat
    </h1>

    <p class="hdesc text-center">
       Use coupan to grap big discount Upto 90% , So dont be too late offer valid till the last date of the coupan . Hurry Up! 
    </p>

</div>

        <!-- Right Section -->
        <div class="col-lg-6 right-side" >
<div class="container mt-2" >

    <div class="card p-4 mx-auto mt-3 mb-5" style="max-width:500px;">

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
        <div class="d-flex justify-content-between mt-2">
            <span>Packaging Charge</span>
            <span>₹10</span>
        </div>
        <hr>
         <div class="d-flex justify-content-between mt-1 fw-bold">
        <span> Amount</span>
        <span>₹{{$netamount}}</span>
        </div>


        <div class="mt-3">
            <form id="coupancode">
                @csrf
            <input type="text"
                   class="form-control"
                   placeholder="Enter Coupon Code" name="code">

            <button class="btn btn-primary w-100 mt-2" id="load" type="submit">
                Apply Coupon
            </button>
           
           <div id="message" class="mt-2"></div>
</form>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-2">
    <span>Discount</span>
    <span id="coupan"style="font-family:Arial;margin-bottom:0;font-size: 18px;font-weight: bold;">  - ₹0</span>
</div>

        <hr>

        <div class="d-flex justify-content-between fw-bold">
            <span>Net Amount</span>
            <h3 id="finalamount"style="font-family:Arial;margin-bottom:0;font-size: 18px;font-weight: bold;">₹{{$netamount}}</h3>
        </div>

        <a href="proceedtopay" class="btn btn-success mt-4">
            Proceed To Pay1
</a>

    </div>
</div>
</div>
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>

  $("#coupancode").submit(function(e){
    e.preventDefault();
    

    let formdata=$(this).serialize();
    $.ajax({
        url:"discountamount",
        type:"POST",
        data:formdata,
        success:function(data){
           
            if(data){
                $("#coupan").html(`
                <h4 style="font-family:Arial;margin-bottom:0;font-size: 18px;"> - ₹ ${data.amount}</h4>`);
                $("#message").html(`
                <h5>${data.message}</h5>`);
                $("#finalamount").html(`
                <h4 style="font-family:Arial;margin-bottom:0;font-size: 18px;font-weight: bold;"> ₹ ${data.finalprice}</h4>`);
                
            }else{
                $("#coupan").html("Code Invalid");
            }
        }
    });
  });

    </script>
@endsection
