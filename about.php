<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Spark Travel Associates</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/logo1.jpg"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php" class="active">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="login.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Discover the world with Spark Travel Associates – your trusted partner for extraordinary travel experiences! We specialize in crafting unforgettable journeys, from luxurious international escapes to enchanting domestic adventures.</p>
      <p>We offers tailored tour packages designed to match your dreams, romantic honeymoon escapes, and handpicked hotel bookings for ultimate comfort and elegance. With a commitment to exceptional service, seamless communication, and unbeatable value, we make every journey—be it a family vacation, group tour, or solo adventure—truly unforgettable.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>reasonable price</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Agency was very helpful at finding me a reasonably priced hotel and close to trams with short notice for the GC marathon weekend. Will definitely use this service again.</p>
            <h3>Md Efaz</h3>
            <span>traveler</span>
            <img src="images/pic-4.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>As always great service,zero issues with connections.The best part of travel online is you can turn up at the airport with your passport and everything else is organised for you.</p>
            <h3>Mahadi Hasan Shanu</h3>
            <span>traveler</span>
            <img src="images/pic-5.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Package was fantastic value, documents were sent to us in a timely manner and our holiday went off without a hitch. everything was smoothly as can be! Thank you!!</p>
            <h3>Kawshik Ahmed Ornob</h3>
            <span>traveler</span>
            <img src="images/pic-6.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>As always great service,zero issues with connections.The best part of travel online is you can turn up at the airport with your passport and everything else is organised for you</p>
            <h3>Mahmudul Hasan Rifat</h3>
            <span>traveler</span>
            <img src="images/pic-2.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Agency was very helpful at finding me a reasonably priced hotel and close to trams with short notice for the GC marathon weekend. Will definitely use this service again.</p>
            <h3>Mahmud Kabir Yousuf</h3>
            <span>traveler</span>
            <img src="images/pic-1.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Package was fantastic value, documents were sent to us in a timely manner and our holiday went off without a hitch. everything was smoothly as can be! Thank you!!</p>
            <h3>Washik Wali Faieaz</h3>
            <span>traveler</span>
            <img src="images/pic-3.jpg" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->
<!-- footer section starts  -->
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1324944309 </a>
         <a href="#"> <i class="fas fa-phone"></i> +880-1914727843 </a>
         <a href="#"> <i class="fas fa-envelope"></i> mahmudulhasanrifat13@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Dhaka, Bangladesh </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.linkedin.com/in/mahmudulhasan13/"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="https://www.facebook.com/profile.php?id=100050070483169"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://www.instagram.com/sharkboy_rifat13/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://api.whatsapp.com/send/?phone=%2B8801914727843&text&type=phone_number&app_absent=0"> <i class="fab fa-whatsapp"></i> whatsapp </a>
      </div>
   </div>
   <div class="credit"> Copyright  2024 by   <span>Spark Travel Associates</span> | All Rights Reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>