<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Spark Travel Associates </title>
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
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="login.php">login</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               
               <h3>tour arround the universe</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/vietnam.jpg) no-repeat">
            <div class="content">
               
               <h3>express the new destination</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/sri.webp) no-repeat">
            <div class="content">
               
               <h3>make your tour effective</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Discover the world with Spark Travel Associates – your trusted partner for extraordinary travel experiences! We specialize in crafting unforgettable journeys, from luxurious international escapes to enchanting domestic adventures.</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/dubai.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai Tour Packages</h3>
            <p>Experience the best of Dubai with this 6-night, 5-day package! Visit iconic landmarks like the Burj Khalifa, Palm Jumeirah, and Dubai Marina, and enjoy thrilling adventures on a Desert Safari. Explore the vibrant Dubai Mall, relax on a Dhow Cruise, and marvel at the stunning Miracle Garden. A perfect blend of luxury, culture, and adventure awaits!</p>
            <h2>BDT 125,999</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
         <img src="images/singapore.avif" alt="">
         </div>
         <div class="content">
            <h3>Singapore Tour Packages</h3>
            <p>Discover the charm of Singapore with this 5-day, 4-night package! Explore iconic attractions like Marina Bay Sands, Gardens by the Bay, and the vibrant Chinatown. Enjoy thrilling fun at Universal Studios, a scenic Sentosa Island tour, and a relaxing stroll at Merlion Park. A perfect mix of adventure, culture, and scenic beauty!</p>
            <h2>BDT 75,999</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/maldives.webp" alt="">
         </div>
         <div class="content">
            <h3>Maldives Tour Packages</h3>
            <p>Escape to paradise with this 4-night, 3-day Maldives package. Enjoy the pristine beaches and turquoise waters of Maafushi Island, perfect for relaxation and water adventures. Explore the vibrant culture of Hulhumale and Male, with bustling markets and historic landmarks. A perfect mix of tropical beauty and cultural charm awaits!</p>
            <h2>BDT 69,999</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->




<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/offer.jpg">
      </div>
   </div>
   <div class="content">
      <h3>upto 30% off</h3>
      <p>Cappadocia, Turkey, is a dream destination known for its breathtaking landscapes and iconic hot air balloon rides. Nestled amidst this magical setting, our accommodations offer the perfect blend of comfort and charm, ideal for couples, families, or solo travelers. Wake up to stunning views of fairy chimneys and enjoy a serene escape after exploring the region’s unique attractions. Don’t miss the chance to soar above the enchanting valleys in a hot air balloon for an unforgettable experience. For a truly memorable stay in Cappadocia, make your journey extraordinary with us.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->
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
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
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