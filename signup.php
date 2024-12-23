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
      <a href="about.php" >about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="login.php" class="active">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- sign-up section starts -->

<section class="signup-section">
   <div class="signup-container">
      <h1>Sign Up</h1>
      <form action="signup_form.php" method="POST">
         <div class="input-box">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
         </div>
         <div class="input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
         </div>
         <div class="input-box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Create a password" required>
         </div>
         <div class="input-box">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
         </div>
         <button type="submit" class="btn">Sign Up</button>
      </form>
      <p class="login-text">Already have an account? <a href="login.php">Login here</a></p>
   </div>
</section>

<!-- sign-up section ends -->

<style>
/* Sign-Up Section Styling */
.signup-section {
   display: flex;
   justify-content: center;
   align-items: center;
   min-height: 70vh;
   background: #f7f7f7;
   padding: 20px;
}

.signup-container {
   background: #fff;
   padding: 30px;
   border-radius: 10px;
   box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
   max-width: 450px;
   width: 100%;
   text-align: center;
}

.signup-container h1 {
   font-size: 24px;
   margin-bottom: 20px;
   color: #333;
}

.input-box {
   margin-bottom: 15px;
   text-align: left;
}

.input-box label {
   display: block;
   font-size: 14px;
   color: #555;
   margin-bottom: 5px;
}

.input-box input {
   width: 100%;
   padding: 10px;
   border: 1px solid #ccc;
   border-radius: 5px;
   font-size: 14px;
}

.btn {
   display: inline-block;
   padding: 10px 20px;
   background: #28a745;
   color: #fff;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   font-size: 16px;
}

.btn:hover {
   background: #218838;
}

.login-text {
   margin-top: 20px;
   font-size: 14px;
   color: #555;
}

.login-text a {
   color: #28a745;
   text-decoration: none;
}

.login-text a:hover {
   text-decoration: underline;
}
</style>


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