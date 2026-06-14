<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cart UI</title>

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Font Awesome -->
   <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

   <!-- CSS -->
   <style>

      .cart-section{
         background:#f8f9fa;
         min-height:100vh;
      }

      .cart-card{
         background:#fff;
         padding:20px;
         border-radius:18px;
         box-shadow:0 5px 20px rgba(0,0,0,0.06);
         transition:0.3s;
      }

      .cart-card:hover{
         transform:translateY(-3px);
      }

      .cart-img{
         width:100%;
         height:140px;
         object-fit:cover;
      }

      .qty-btn{
         width:35px;
         height:35px;
         border:none;
         border-radius:8px;
         background:#ff4d4d;
         color:#fff;
         font-weight:bold;
         transition:0.3s;
      }

      .qty-btn:hover{
         background:#e63939;
      }

      .qty-input{
         width:50px;
         height:35px;
         text-align:center;
         border:1px solid #ddd;
         border-radius:8px;
      }

      .remove-btn{
         width:45px;
         height:45px;
         border:none;
         border-radius:12px;
         background:#ffe5e5;
         color:#ff4d4d;
         transition:0.3s;
      }

      .remove-btn:hover{
         background:#ff4d4d;
         color:#fff;
      }

      .summary-card{
         background:#fff;
         padding:30px;
         border-radius:18px;
         box-shadow:0 5px 20px rgba(0,0,0,0.06);
         position:sticky;
         top:100px;
      }

      .checkout-btn{
         width:100%;
         border:none;
         padding:14px;
         border-radius:12px;
         background:#ff4d4d;
         color:#fff;
         font-size:1rem;
         font-weight:600;
         transition:0.3s;
      }

      .checkout-btn:hover{
         background:#e63939;
      }

   </style>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet"/>
          <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
      <!-- AOS Animate on Scroll -->
      <link href="{{ asset('css/aos.css') }}" rel="stylesheet"/>
      <!-- Swiper -->
      <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet"/>
      <!-- all min css -->
      <link rel="stylesheet" href="{{ asset('css/all.min.css') }}"/>
      <!-- magnific CSS -->
      <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"/>
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="nav">
   <div class="container">
      <a class="navbar-brand" href="#">
         <div class="blogo">
            <div class="bico"><i class="fas fa-utensils"></i></div>
            <div>
               <div class="bname">Blink<span>burger</span></div>
               <div class="bsub">Buy , Track and Review</div>
            </div>
         </div>
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
         <i class="fas fa-bars" style="color:var(--primary);font-size:1.35rem;"></i>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navmenu">
         

         <div class="d-flex align-items-center gap-2">


            
               <!-- Cart Button -->
            

               <!-- Dashboard Button -->
               <a href="customerdashboard" class="btn btn-primary">
                  Dashboard
               </a>

               <!-- Logout Button -->
               <a href="logout" class="btn btn-danger">
                  Logout
               </a>
            
              
            

         </div>
      </div>
   </div>
</nav>

<section class="cart-section py-5">
   <div class="container">

      <!-- Heading -->
      <div class="text-center mb-5">
         <h2 class="fw-bold">Your Cart</h2>
         <p class="text-muted">Delicious burgers waiting for checkout 🍔</p>
      </div>

      <form action="checkout" method="post">
         @csrf
      <div class="row g-4">
         <!-- LEFT SIDE -->
         <div class="col-lg-8">
            @foreach($allitem as $all)
            <!-- CART ITEM -->
            <div class="cart-card mb-4">
               <div class="row align-items-center">

                  <div class="col-md-3">
                     <img src="{{asset('storage/'.$all->image)}}"/>
                  </div>

                  <div class="col-md-5">
                     <h5 class="mb-1 fw-bold">{{$all->name}}</h5>
                     <p class="text-muted mb-2">{{$all->description}}</p>

                     <div class="d-flex align-items-center gap-2">
                        Qty : 
                        <!-- <button type="button" class="qty-btn" id="minus{{$all->id}}">-</button> -->
                        <input type="text" id="qty{{$all->id}}" value="1"class="qty-input" name="quantity[]">
                        <!-- <button type="button" class="qty-btn" id="plus{{$all->id}}">+</button> -->
                        <input type="hidden"
       name="product_id[]"
       value="{{$all->id}}">
                     </div>
                  </div>

                  <div class="col-md-2 text-center">
                     <h5 class="fw-bold text-danger">{{$all->amount}} /-</h5><input type="hidden"
       name="amount[]"
       value="{{$all->amount}}">
                  </div>

                  <div class="col-md-2 text-end">
                     <a href="{{'deletecart/'.$all->id}}">
                     <button class="remove-btn">
                        <i class="fas fa-trash"></i>
                     </button></a>
                  </div>

               </div>
            </div>
        @endforeach
         </div>
        

         <!-- RIGHT SIDE -->
         <div class="col-lg-4">

            <div class="summary-card">

               <h4 class="fw-bold mb-4">Extra Amount</h4>

               <div class="d-flex justify-content-between mb-3">
                  <span>CGST</span>
                  <strong>@2.5%</strong>
               </div>

               <div class="d-flex justify-content-between mb-3">
                  <span>SGST</span>
                  <strong>@2.5%</strong>
               </div>

               <div class="d-flex justify-content-between mb-3">
                  <span>Packaging Charge</span>
                  <strong class="text-success">₹10</strong>
               </div>
               <!-- COUPON SECTION -->
                <!-- <form action="coupan" method="post">
                  @csrf
<div class="coupon-box mb-4">
   <label class="form-label fw-semibold">Apply Coupon</label>

   <div class="d-flex gap-2">
      <input type="text"
             class="form-control coupon-input"
             placeholder="Enter coupon code" name="coupan" value="{{old('coupan')}}">

      <button class="apply-btn rounded-1 w-50" type="submit">
         Apply
      </button>
   </div>
</div>
</form>
@if(session('success'))
<div class="alert alert-success">
   {{session('success')}}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
   {{session('error')}}
</div>
@endif -->

               <hr>

              

               <button class="checkout-btn">
                  Proceed To Checkout
               </button>
</form>
            </div>

         </div>

      </div>

   </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    @foreach($allitem as $all)
    var additem=document.getElementById("plus{{$all->id}}");
    additem.addEventListener("click",function(){
       var qty=document.getElementById("qty{{$all->id}}");
       var value=parseInt(qty.value);
       qty.value=value+1;
    });

    var decrease=document.getElementById("minus{{$all->id}}");
    decrease.addEventListener("click",function(){
        var qty=document.getElementById("qty{{$all->id}}");
        var value=parseInt(qty.value);
        if(value>1){
            qty.value=value-1;
        }
    })
@endforeach
</script>
</body>
</html>