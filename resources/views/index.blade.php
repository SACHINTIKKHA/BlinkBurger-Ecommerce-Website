@extends('layout')
@section('main')
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
            <div class="collapse navbar-collapse" id="navmenu">
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item"><a class="nav-link active" href="#hero">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                  <li class="nav-item"><a class="nav-link" href="#chefs">Chefs</a></li>
                  <li class="nav-item"><a class="nav-link" href="#reservation">Book Your table</a></li>
                  <li class="nav-item"><a class="nav-link" href="#testimonials">Reviews</a></li>
                  <li class="nav-item"><a class="nav-link" href="#contact-section">Contact</a></li>
               </ul>
               <div class="d-flex align-items-center gap-1">
                  <!-- FIX 1: Search button -->
                  <button id="navSearchBtn" title="Search"><i class="fas fa-search"></i></button>
                  <a href="register" class="btn btn-danger">
                  Register
                  </a>
                <a href="login" class=" btn btn-primary">Login</a>
               </div>
            </div>
         </div>
      </nav>
      @if(session('success'))
<div class="alert alert-success">
   {{session('success')}}
</div>
@endif
      <!-- ============================================================
         FIX 1 � SEARCH OVERLAY POPUP
         ============================================================ -->
      <div id="searchOv">
         <button class="sovclose" id="searchClose"><i class="fas fa-times"></i></button>
         <div class="sovbox">
            <h4>What are you craving today?</h4>
            <div class="sovinput">
               <input type="text" id="searchInput" placeholder="Search burgers, pizza, chicken..." autocomplete="off"/>
               <button><i class="fas fa-search"></i></button>
            </div>
            <!-- Categories inside search box -->
            <div class="sovcats">
               <div class="sovcat active" data-cat="all">
                  <img src="img/menu/1.jpg" alt=""/>All Items
               </div>
               <div class="sovcat" data-cat="burgers">
                  <img src="img/menu/1.jpg" alt=""/>Burgers
               </div>
               <div class="sovcat" data-cat="pizza">
                  <img src="img/menu/2.jpg" alt=""/>Pizza
               </div>
               <div class="sovcat" data-cat="chicken">
                  <img src="img/menu/3.jpg" alt=""/>Momos
               </div>
               <div class="sovcat" data-cat="wraps">
                  <img src="img/menu/4.jpg" alt=""/>Chowmien
               </div>
               <div class="sovcat" data-cat="pasta">
                  <img src="img/menu/5.jpg" alt=""/>Fries
               </div>
               <div class="sovcat" data-cat="desserts">
                  <img src="img/menu/6.jpg" alt=""/>Rice
               </div>
            </div>
            <div class="sovtrend">
               <p><i class="fas fa-fire me-1" style="color:var(--secondary);"></i>Trending Searches</p>
               <span class="ttag">Smash Burger</span>
               <span class="ttag">Nashville Chicken</span>
               <span class="ttag">Truffle Pizza</span>
               <span class="ttag">Lava Cake</span>
               <span class="ttag">Loaded Fries</span>
               <span class="ttag">Mango Shake</span>
            </div>
         </div>
      </div>
      <!-- ============================================================
         HERO
         ============================================================ -->
      <section id="hero">
         <div class="hs hs1"></div>
         <div class="hs hs2"></div>
         <div class="hbgtxt">FOOD</div>
         <div class="container">
            <div class="row align-items-center g-5" style="min-height:88vh;">
               <div class="col-lg-6">
                  <div class="hbadge">
                     <div class="hbi"><i class="fas fa-star"></i></div>
                     <span>#1 Order Your Favourite Snacks in Luknow UP-32</span>
                  </div>
                  <h1 class="htitle">Delicious <span class="hl">Fast Food</span><br/>for Every Moment</h1>
                  <p class="hdesc">Experience bold flavors crafted from premium ingredients. From crispy burgers to gourmet pizzas - every bite is an adventure worth savoring.</p>
                  <div class="d-flex flex-wrap gap-3 mb-2">
                     <a href="#menu" class="btn-red"><i class="fas fa-utensils"></i>Explore Menu</a>
                     <!-- FIX 2: Magnific popup video trigger -->
					 <a href="https://www.youtube.com/watch?v=RXv_uIN6e-Y" class="magnific_popup btn-play popup-youtube">
						<div class="pico"><i class="fas fa-play"></i></div>
						<span>Watch Our Story</span>
					 </a>
                  </div>
                  <div class="hstats d-flex gap-3 flex-wrap mt-4">
                     <div class="hstat"><span class="snum">850<em>+</em></span><small>Happy Customers</small></div>
                     <div class="sdiv"></div>
                     <div class="hstat"><span class="snum">120<em>+</em></span><small>Menu Items</small></div>
                     <div class="sdiv"></div>
                     <div class="hstat"><span class="snum">15<em>+</em></span><small>Expert Chefs</small></div>
                     <div class="sdiv"></div>
                     <div class="hstat"><span class="snum">12<em>yr</em></span><small>Experience</small></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div style="position:relative;text-align:center;">
                     <div class="hcircle">
                        <img src="img/banner-img.jpg" alt="Burger"/>
                     </div>
                     <div class="fcard fc1">
                        <div class="fcoi r"><i class="fas fa-fire"></i></div>
                        <div><span class="fcnum">Hot Deal</span><span class="fcsm">30% off today</span></div>
                     </div>
                     <div class="fcard fc2">
                        <div class="fcoi y"><i class="fas fa-star"></i></div>
                        <div><span class="fcnum">4.9/5</span><span class="fcsm">2k+ reviews</span></div>
                     </div>
                     <div class="fcard fc3">
                        <div class="fcoi g"><i class="fas fa-clock"></i></div>
                        <div><span class="fcnum">20 min</span><span class="fcsm">Fast delivery</span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- MARQUEE -->
      <div class="mqsec">
         <div class="mqtrack">
            <div class="mqitem"><i class="fas fa-circle"></i>Veg Burger</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Chicken Burger</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Honey Chilli </div>
            <div class="mqitem"><i class="fas fa-circle"></i>Kabab Roll</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Dabeli</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Fried Momos</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Grilled Sandwiches</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Cold Cofee</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Tea</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Coffee</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Fresh Wraps &amp; Rolls</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Manchuriyan</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Fried Rice</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Tandoori Momos</div>
         </div>
      </div>
      <!-- CATEGORY -->
      <section id="category">

    <div class="container">

        <div class="text-center mb-5" data-aos="fade-up">

            <span class="slbl">What We Offer</span>

            <h2 class="stitle">
                Browse by <span>Category</span>
            </h2>

            <div class="sline"></div>

            <p class="sdesc mx-auto" style="max-width:480px;">
                From sizzling burgers to exotic world cuisines -
                find your favourite in our menu
            </p>

        </div>

        <div class="row g-3 justify-content-center">

            <!-- All Items -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2"
                 data-aos="zoom-in">

                <a href="{{ url('allitem') }}"
                   class="text-decoration-none text-dark">

                    <div class="catcard active">

                        <img class="catimg"
                             src="img/category/chaap.jpg"
                             alt=""/>

                        <div class="catnm">
                            All Items
                        </div>

                        <div class="catct"></div>

                    </div>

                </a>

            </div>

            <!-- Burgers -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2"
                 data-aos="zoom-in">

                <a href="{{ url('burger') }}"
                   class="text-decoration-none text-dark">

                    <div class="catcard">

                        <img class="catimg"
                             src="img/category/burger.avif"
                             alt=""/>

                        <div class="catnm">
                            Burgers
                        </div>

                    </div>

                </a>

            </div>

            <!-- Rolls -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2"
                 data-aos="zoom-in">

                <a href="{{ url('roll') }}"
                   class="text-decoration-none text-dark">

                    <div class="catcard">

                        <img class="catimg"
                             src="img/category/roll.jpg"
                             alt=""/>

                        <div class="catnm">
                            Rolls
                        </div>

                    </div>

                </a>

            </div>

            <!-- Chowmein -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2"
                 data-aos="zoom-in">

                <a href="{{ url('chowmein') }}"
                   class="text-decoration-none text-dark">

                    <div class="catcard">

                        <img class="catimg"
                             src="img/category/chowmein.jpg"
                             alt=""/>

                        <div class="catnm">
                            Chowmein
                        </div>

                    </div>

                </a>

            </div>

            <!-- Rice -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2"
                 data-aos="zoom-in">

                <a href="rice"
                   class="text-decoration-none text-dark">

                    <div class="catcard">

                        <img class="catimg"
                             src="img/category/biryani.jpg"
                             alt=""/>

                        <div class="catnm">
                            Rice
                        </div>

                    </div>

                </a>

            </div>

            <!-- Momos -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2"
                 data-aos="zoom-in">

                <a href="{{ url('momos') }}"
                   class="text-decoration-none text-dark">

                    <div class="catcard">

                        <img class="catimg"
                             src="img/category/momos.jpg"
                             alt=""/>

                        <div class="catnm">
                            Momos
                        </div>

                    </div>

                </a>

            </div>

            <!-- Chaap -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2"
                 data-aos="zoom-in">

                <a href="{{ url('chaap') }}"
                   class="text-decoration-none text-dark">

                    <div class="catcard">

                        <img class="catimg"
                             src="img/category/chaap.jpg"
                             alt=""/>

                        <div class="catnm">
                            Chaap
                        </div>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section>
      <!-- ============================================================
         MENU � FIX 3 (filter works) + FIX 4 (plus opens popup)
         ============================================================ -->
 
	  
      <!-- ============================================================
         HISTORY � FIX 8 (alternating left/right text)
         ============================================================ -->
      <section id="history">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Our Journey</span>
               <h2 class="stitle">A History of <span>Restaurant</span></h2>
               <div class="sline"></div>
               <p class="sdesc mx-auto" style="max-width:480px;">From humble beginnings to the city's most beloved restaurant - every chapter written with passion.</p>
            </div>
            <div class="timeline" data-aos="fade-up">
               <!-- ODD ? text on LEFT -->
               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">2012</div>
                     <h5>Evolution of Restaurants</h5>
                     <p>Sarab opens its first 20-seat diner on Flavor Street. Within 3 months, lines stretch around the block every evening as word of our food spreads.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">2012</div>
                     <h5>Evolution of Restaurants</h5>
                     <p>Sarab opens its first 20-seat diner on Flavor Street. Within 3 months, lines stretch around the block every evening as word of our food spreads.</p>
                  </div>
               </div>
               <!-- EVEN ? text on RIGHT -->
               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">2015</div>
                     <h5>Fine Dining &amp; The Concept</h5>
                     <p>Expanding the vision - we introduced our signature tasting menu and hired our first Michelin-trained chef, elevating our craft to remarkable new heights.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">2015</div>
                     <h5>Fine Dining &amp; The Concept</h5>
                     <p>Expanding the vision - we introduced our signature tasting menu and hired our first Michelin-trained chef, elevating our craft to remarkable new heights.</p>
                  </div>
               </div>
               <!-- ODD ? text on LEFT -->
               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">2019</div>
                     <h5>Modern Fast Food Origins</h5>
                     <p>Launched our signature fast-food line, merging gourmet quality with speed and convenience. Within 6 months we won 3 prestigious culinary awards nationally.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">2019</div>
                     <h5>Modern Fast Food Origins</h5>
                     <p>Launched our signature fast-food line, merging gourmet quality with speed and convenience. Within 6 months we won 3 prestigious culinary awards nationally.</p>
                  </div>
               </div>
               <!-- EVEN ? text on RIGHT -->
               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">2026</div>
                     <h5>National Expansion</h5>
                     <p>Now operating in 8 cities across the US with an online delivery platform handling 10,000+ orders weekly - and growing every single day.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">2026</div>
                     <h5>National Expansion</h5>
                     <p>Now operating in 8 cities across the US with an online delivery platform handling 10,000+ orders weekly - and growing every single day.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	  
      <!-- CHEFS -->
      <section id="chefs">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">The Culinary Team</span>
               <h2 class="stitle">Meet Our Expert <span>Chefs</span></h2>
               <div class="sline"></div>
            </div>
            <div class="row g-4">
               <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                  <div class="chcard">
                     <div class="chimg">
                        <img src="img/chefs/1.jpg" alt=""/>
                        <div class="chsoc"><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div>
                     </div>
                     <div class="chbody">
                        <div class="chnm">Alice Mortal</div>
                        <div class="chrole">Head Chef</div>
                        <div class="chexp">12 years experience</div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="80">
                  <div class="chcard">
                     <div class="chimg">
                        <img src="img/chefs/shivam.png" alt=""/>
                        <div class="chsoc"><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div>
                     </div>
                     <div class="chbody">
                        <div class="chnm">Shivam Singh</div>
                        <div class="chrole">Sandwich Master</div>
                        <div class="chexp">8 years experience</div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
                  <div class="chcard">
                     <div class="chimg">
                        <img src="img/chefs/abhishek.png" alt=""/>
                        <div class="chsoc"><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div>
                     </div>
                     <div class="chbody">
                        <div class="chnm">Abhishek Rai</div>
                        <div class="chrole">Fries Specialist</div>
                        <div class="chexp">10 years experience</div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
                  <div class="chcard">
                     <div class="chimg">
                        <img src="img/chefs/chinmay.png" alt=""/>
                        <div class="chsoc"><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div>
                     </div>
                     <div class="chbody">
                        <div class="chnm">Chinmay Tiwari</div>
                        <div class="chrole">Pizza Artisan</div>
                        <div class="chexp">9 years experience</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	  
      <!-- HOURS -->
      <section id="hours">
         <div class="hrsbg"></div>
         <div class="container" style="position:relative;z-index:2;">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl" style="color:#a5d6bc;">Opening Hours</span>
               <h2 class="stitle" style="color:#fff;">We're Open <span style="color:var(--secondary);">For You</span></h2>
               <div class="sline"></div>
            </div>
            <div class="row g-4 align-items-start">
               <div class="col-lg-5" data-aos="fade-right">
                  <div class="hrscard">
                     <div class="hrsrow">
                        <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Monday - Tuesday</span>
                        <div class="d-flex align-items-center gap-2">
                           <div class="hdot off"></div>
                           <span class="hrstime" style="color:#ff6b6b;">Closed</span>
                        </div>
                     </div>
                     <div class="hrsrow">
                        <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Wednesday - Thursday</span>
                        <div class="d-flex align-items-center gap-2">
                           <div class="hdot on"></div>
                           <span class="hrstime">09:00 AM - 10:00 PM</span>
                        </div>
                     </div>
                     <div class="hrsrow">
                        <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Friday</span>
                        <div class="d-flex align-items-center gap-2">
                           <div class="hdot on"></div>
                           <span class="hrstime">09:00 AM - 11:00 PM</span>
                        </div>
                     </div>
                     <div class="hrsrow">
                        <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Saturday</span>
                        <div class="d-flex align-items-center gap-2">
                           <div class="hdot on"></div>
                           <span class="hrstime">10:00 AM - 11:30 PM</span>
                        </div>
                     </div>
                     <div class="hrsrow">
                        <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Sunday</span>
                        <div class="d-flex align-items-center gap-2">
                           <div class="hdot on"></div>
                           <span class="hrstime">11:00 AM - 09:00 PM</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3" data-aos="zoom-in">
                  <div class="hrscta">
                     <i class="fas fa-truck-fast fa-2x mb-3" style="color:rgba(255,255,255,.8);"></i>
                     <h4>Order Online</h4>
                     <p>Get hot food delivered in 25 minutes</p>
                     <a href="#menu" class="btnw">Order Now ?</a>
                  </div>
               </div>
               <div class="col-lg-4" data-aos="fade-left">
                  <div class="hrscard">
                     <h5 style="color:#fff;margin-bottom:18px;font-family:'Poppins',sans-serif;font-size:.95rem;font-weight:700;"><i class="fas fa-map-marker-alt me-2" style="color:var(--secondary);"></i>Find Us</h5>
                     <div class="hrsrow"><span class="hrsday"><i class="fas fa-location-dot me-2" style="color:var(--secondary);"></i>Address</span><span class="hrstime" style="font-size:.8rem;">42 Flavor Street, NY</span></div>
                     <div class="hrsrow"><span class="hrsday"><i class="fas fa-phone me-2" style="color:var(--secondary);"></i>Phone</span><span class="hrstime" style="font-size:.8rem;">+1 (800) 123-4567</span></div>
                     <div class="hrsrow"><span class="hrsday"><i class="fas fa-envelope me-2" style="color:var(--secondary);"></i>Email</span><span class="hrstime" style="font-size:.8rem;">hello@sarabfood.com</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	  
      <!-- TESTIMONIALS -->
      <section id="testimonials">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">What People Say</span>
               <h2 class="stitle">Our Customers <span>Feedback</span></h2>
               <div class="sline"></div>
            </div>
            <div class="swiper tesSwiper" data-aos="fade-up">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="tescard">
                        <div class="tesq">"</div>
                        <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testxt">Honestly the best burgers I've ever had. The smash burger is incredible - perfectly crispy edges, juicy inside, and those pickles! We come every Friday now.</p>
                        <div class="tesauth">
                           <img src="img/testimonial/1.jpg" alt=""/>
                           <div>
                              <div class="tesnm">Monica Wilber</div>
                              <div class="tesrl">Regular Customer</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tescard">
                        <div class="tesq">"</div>
                        <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testxt">Ordered delivery and the food arrived hot and fresh in 22 minutes. Portions are generous. Sarab has become my go-to comfort food spot without question.</p>
                        <div class="tesauth">
                           <img src="img/testimonial/2.jpg" alt=""/>
                           <div>
                              <div class="tesnm">Cameron Fox</div>
                              <div class="tesrl">Food Blogger</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tescard">
                        <div class="tesq">"</div>
                        <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testxt">The truffle pasta blew my mind. I didn't expect that quality from a fast food place. Great ambiance, super friendly staff. Highly recommended!</p>
                        <div class="tesauth">
                           <img src="img/testimonial/3.jpg" alt=""/>
                           <div>
                              <div class="tesnm">Priya Sharma</div>
                              <div class="tesrl">Food Enthusiast</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tescard">
                        <div class="tesq">"</div>
                        <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testxt">Catered our office party of 50 people and everything was flawless. Fresh, delicious, on time and well presented. Nashville chicken was the absolute star!</p>
                        <div class="tesauth">
                           <img src="img/testimonial/4.jpg" alt=""/>
                           <div>
                              <div class="tesnm">David Park</div>
                              <div class="tesrl">Corporate Client</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-pagination mt-4" style="position:static;"></div>
            </div>
         </div>
      </section>
	  
      <!-- RESERVATION FORM -->
      <section id="reservation">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Book a Table</span>
               <h2 class="stitle">Book Your  <span>Table</span></h2>
               <div class="sline"></div>
               <p class="sdesc mx-auto" style="max-width:480px;">Reserve your table for a memorable dining experience. We recommend booking 24 hours in advance for weekend evenings.</p>
            </div>
            <div class="row g-4 align-items-start">
               <div class="col-lg-4" data-aos="fade-right">
                  <div style="background:var(--dark);border-radius:18px;padding:36px;">
                     <h4 style="color:#fff;font-size:1.3rem;margin-bottom:8px;">Contact Info</h4>
                     <p style="color:rgba(255,255,255,.55);font-size:.85rem;margin-bottom:26px;">We're happy to help you plan the perfect dining experience.</p>
                     <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-center gap-3">
                           <div style="width:46px;height:46px;border-radius:11px;background:rgba(232,40,26,.2);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.1rem;flex-shrink:0;"><i class="fas fa-clock"></i></div>
                           <div><strong style="display:block;color:#ccc;font-size:.78rem;text-transform:uppercase;letter-spacing:.8px;">Opening Hours</strong><span style="color:#fff;font-size:.87rem;">Wed - Sun, 9 AM - 11 PM</span></div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                           <div style="width:46px;height:46px;border-radius:11px;background:rgba(232,40,26,.2);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.1rem;flex-shrink:0;"><i class="fas fa-phone-alt"></i></div>
                           <div><strong style="display:block;color:#ccc;font-size:.78rem;text-transform:uppercase;letter-spacing:.8px;">Call for Booking</strong><span style="color:#fff;font-size:.87rem;">+1 (800) 123-4567</span></div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                           <div style="width:46px;height:46px;border-radius:11px;background:rgba(232,40,26,.2);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.1rem;flex-shrink:0;"><i class="fas fa-users"></i></div>
                           <div><strong style="display:block;color:#ccc;font-size:.78rem;text-transform:uppercase;letter-spacing:.8px;">Group Dining</strong><span style="color:#fff;font-size:.87rem;">Special menus for 10+ guests</span></div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                           <div style="width:46px;height:46px;border-radius:11px;background:rgba(232,40,26,.2);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.1rem;flex-shrink:0;"><i class="fas fa-map-marker-alt"></i></div>
                           <div><strong style="display:block;color:#ccc;font-size:.78rem;text-transform:uppercase;letter-spacing:.8px;">Location</strong><span style="color:#fff;font-size:.87rem;">42 Flavor Street, NY</span></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8" data-aos="fade-left">
                  <div class="fcard">
                     <div class="row g-3">
                        <div class="col-sm-6"><label class="flbl">Full Name *</label><input type="text" class="fctrl" placeholder="Sachin Tikkha"/></div>
                        <div class="col-sm-6"><label class="flbl">Phone Number *</label><input type="tel" class="fctrl" placeholder="+91-9648-2785-36"/></div>
                        <div class="col-sm-6"><label class="flbl">Email Address *</label><input type="email" class="fctrl" placeholder="sachin@gmail.com"/></div>
                        <div class="col-sm-6">
                           <label class="flbl">Number of Guests *</label>
                           <select class="fctrl">
                              <option>1 Person</option>
                              <option>2 People</option>
                              <option>3 - 4 People</option>
                              <option>5 - 6 People</option>
                              <option>7 -10 People</option>
                              <option>10+ People</option>
                           </select>
                        </div>
                        <div class="col-sm-6"><label class="flbl">Date *</label><input type="date" class="fctrl"/></div>
                        <div class="col-sm-6">
                           <label class="flbl">Time *</label>
                           <select class="fctrl">
                              <option>09:00 AM</option>
                              <option>10:00 AM</option>
                              <option>11:00 AM</option>
                              <option>12:00 PM</option>
                              <option>01:00 PM</option>
                              <option>02:00 PM</option>
                              <option>06:00 PM</option>
                              <option>07:00 PM</option>
                              <option>08:00 PM</option>
                              <option>09:00 PM</option>
                              <option>10:00 PM</option>
                           </select>
                        </div>
                        <div class="col-12"><label class="flbl">Special Requests</label><textarea class="fctrl" rows="3" placeholder="Birthday , Anniversary , Engagement..."></textarea></div>
                        <div class="col-12"><button class="btn-red w-100 justify-content-center" id="resBtn"><i class="fas fa-calendar-check"></i>Click to book</button></div>
                     </div>
                     <div class="sucmsg" id="resOk">
                        <i class="fas fa-check-circle"></i>
                        <p>Table reserved! We'll confirm via email shortly.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
      <!-- BLOG -->
      <section id="blog">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">News &amp; Updates</span>
               <h2 class="stitle">Our Latest <span>Blog</span> Posts</h2>
               <div class="sline"></div>
            </div>
            <div class="row g-4">
               <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                  <div class="blcard">
                     <div class="blimg">
                        <img src="img/blog/1.jpg" alt=""/>
                        <div class="bldatebdg"><span class="bd">14</span><span class="bm">Mar</span></div>
                     </div>
                     <div class="blbody">
                        <div class="bltag">Food &amp; Health</div>
                        <div class="bltit"><a href="#">Healthy Fast Food: A Myth or Beautiful Reality</a></div>
                        <div class="blmeta"><span><i class="fas fa-user"></i>James Writer</span><span><i class="fas fa-comment"></i>24 Comments</span></div>
                        <a href="#" class="blmore">Read More <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="80">
                  <div class="blcard">
                     <div class="blimg">
                        <img src="img/blog/2.jpg" alt=""/>
                        <div class="bldatebdg"><span class="bd">28</span><span class="bm">Feb</span></div>
                     </div>
                     <div class="blbody">
                        <div class="bltag">Food Science</div>
                        <div class="bltit"><a href="#">Is Fast Food Getting Healthier? Here's What We Found</a></div>
                        <div class="blmeta"><span><i class="fas fa-user"></i>Sarah Grain</span><span><i class="fas fa-comment"></i>18 Comments</span></div>
                        <a href="#" class="blmore">Read More <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
                  <div class="blcard">
                     <div class="blimg">
                        <img src="img/blog/3.jpg" alt=""/>
                        <div class="bldatebdg"><span class="bd">05</span><span class="bm">Jan</span></div>
                     </div>
                     <div class="blbody">
                        <div class="bltag">Recipes</div>
                        <div class="bltit"><a href="#">Innovative Hot Chickpeas Flake Crackin' Recipe at Home</a></div>
                        <div class="blmeta"><span><i class="fas fa-user"></i>Chef Marcus</span><span><i class="fas fa-comment"></i>32 Comments</span></div>
                        <a href="#" class="blmore">Read More <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
      <!-- NEWSLETTER -->
      <section id="newsletter">
         <div class="nlbg"></div>
         <div class="container">
            <div class="nlw text-center" data-aos="zoom-in">
               <span class="slbl" style="color:rgba(255,255,255,.7);">Stay Connected</span>
               <h2 class="mb-3" style="color:#fff;">Subscribe &amp; Get Exclusive <span style="color:var(--secondary);">Deals</span></h2>
               <p class="mb-4" style="color:rgba(255,255,255,.78);">Get 15% off your first order plus early access to new menu items</p>
               <div class="nl-form-wrap">
                  <input class="nlinput" type="email" id="nlEmail" placeholder="Enter your email address..."/>
                  <button class="nlbtn" id="nlBtn"><i class="fas fa-paper-plane me-1"></i>Subscribe</button>
               </div>
               <p style="color:rgba(255,255,255,.45);font-size:.76rem;margin-top:11px;"><i class="fas fa-lock me-1"></i>No spam, unsubscribe anytime.</p>
            </div>
         </div>
      </section>
	  
      <!-- ============================================================
         FIX 6 � CONTACT FORM
         ============================================================ -->
      <section id="contact-section">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Get In Touch</span>
               <h2 class="stitle">Contact <span>Us</span></h2>
               <div class="sline"></div>
               <p class="sdesc mx-auto" style="max-width:480px;">Have a question, feedback, or want to plan a special event? We'd love to hear from you.</p>
            </div>
            <div class="row g-4">
               <div class="col-lg-4" data-aos="fade-right">
                  <div class="ctdark">
                     <h4>Let's Talk</h4>
                     <p class="ctsub">We typically respond within 2 hours during business hours.</p>
                     <div class="ctitem">
                        <div class="cticon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="ctinfo"><strong>Address</strong><span>42 Flavor Street, Manhattan,<br/>New York, NY 10001</span></div>
                     </div>
                     <div class="ctitem">
                        <div class="cticon"><i class="fas fa-phone-alt"></i></div>
                        <div class="ctinfo"><strong>Phone</strong><span>+1 (800) 123-4567</span></div>
                     </div>
                     <div class="ctitem">
                        <div class="cticon"><i class="fas fa-envelope"></i></div>
                        <div class="ctinfo"><strong>Email</strong><span>hello@sarabfood.com</span></div>
                     </div>
                     <div class="ctitem">
                        <div class="cticon"><i class="fas fa-clock"></i></div>
                        <div class="ctinfo"><strong>Working Hours</strong><span>Wed - Sun: 9 AM - 11 PM</span></div>
                     </div>
                     <div class="ctsocrow">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8" data-aos="fade-left">
                  <div class="fcard">
                     <div class="row g-3">
                        <div class="col-sm-6"><label class="flbl">Your Name *</label><input type="text" class="fctrl" placeholder="John Doe"/></div>
                        <div class="col-sm-6"><label class="flbl">Email Address *</label><input type="email" class="fctrl" placeholder="you@email.com"/></div>
                        <div class="col-sm-6"><label class="flbl">Phone Number</label><input type="tel" class="fctrl" placeholder="+1 (800) 000-0000"/></div>
                        <div class="col-sm-6">
                           <label class="flbl">Subject *</label>
                           <select class="fctrl">
                              <option>General Inquiry</option>
                              <option>Catering &amp; Events</option>
                              <option>Feedback</option>
                              <option>Partnership</option>
                              <option>Media &amp; Press</option>
                           </select>
                        </div>
                        <div class="col-12"><label class="flbl">Message *</label><textarea class="fctrl" rows="5" placeholder="Write your message here..."></textarea></div>
                        <div class="col-12"><button class="btn-red" id="ctcBtn"><i class="fas fa-paper-plane"></i>Send Message</button></div>
                     </div>
                     <div class="sucmsg" id="ctcOk">
                        <i class="fas fa-check-circle"></i>
                        <p>Message sent! We'll reply within 2 hours.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <button id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})"><i class="fas fa-chevron-up"></i></button>
    
	@endsection
     

   </body>
</html>
