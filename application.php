<!DOCTYPE html>
<html lang="en">
   <head>
      <title>ADMISSION FORM</title>
   </head>
   <?php include("php_include/head.php");
      ?>
   <body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
      <?php include("php_include/header.php");
         ?>
      <main>
         <!-- Page banner area start here -->
         <section class="page-banner bg-image section-padding" style="background-image: url('images/banner_new1.PNg'); background-size: cover; background-position: center;">
            <div class="gaps-right d-none d-sm-block float-bob-x">
               <img src="../images/gaps-primary.png" alt="">
            </div>
            <div class="gaps-left d-none d-sm-block float-bob-x">
               <img src="../images/gaps-primary.png" alt="">
            </div>
            <div class="container" style="background-color:black;">
               <h2 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">ADMISSION FORM</h2>
               <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                  <a href="index.php"><font size="6"  color="gray"><b>Home :</b></font></a>
                  <span><font size="6" color="red"><b>&nbsp;&nbsp;ADMISSIONS</b></font></span>
               </div>
            </div>
         </section>
         <br><br><br>
         <form method="POST" action="application_process.php" style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
            <h2 style="color: #444;">Personal Information</h2>
            <label for="firstName" style="display: block; margin-bottom: 8px;">First Name:</label>
            <input type="text" id="firstName" name="fname" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <label for="lastName" style="display: block; margin-bottom: 8px;">Last Name:</label>
            <input type="text" id="lastName" name="lname" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <label for="dob" style="display: block; margin-bottom: 8px;">Date of Birth:</label>
            <input type="date" id="dob" name="dob" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <h2 style="color: #444;">Contact Details</h2>
            <label for="email" style="display: block; margin-bottom: 8px;">Email:</label>
            <input type="email" id="email" name="email" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <label for="phone" style="display: block; margin-bottom: 8px;">Phone Number:</label>
            <input type="tel" id="phone" name="mobile" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <h2 style="color: #444;">Educational Background</h2>
            <label for="highSchool" style="display: block; margin-bottom: 8px;">SSLC School Name:</label>
            <input type="text" id="highSchool" name="sslc_school_name" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <label for="gpa" style="display: block; margin-bottom: 8px;">SSLC Percentage:</label>
            <input type="text" id="gpa" name="sslc_percent" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <label for="gradYear" style="display: block; margin-bottom: 8px;">PU College Name:</label>
            <input type="text" id="gradYear" name="pu_college_name" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <label for="gpa" style="display: block; margin-bottom: 8px;">PUC Percentage:</label>
            <input type="text" id="gpa" name="puc_percent" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <button type="submit" name="submit" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Submit Application</button>
         </form>
         <br><br>
      </main>
      <!-- Footer area start here -->
      <?php include("php_include/footer.php");
         ?>
      <!-- Footer area end here -->
      <!-- Back to top area start here -->
      <div class="scroll-up">
         <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- Back to top area end here -->
      <!-- Jquery 3 6 0 Min Js -->
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <!-- Bootstrap min Js -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- Swiper bundle min Js -->
      <script src="assets/js/swiper-bundle.min.js"></script>
      <!-- Counterup min Js -->
      <script src="assets/js/jquery.counterup.min.js"></script>
      <!-- Wow min Js -->
      <script src="assets/js/wow.min.js"></script>
      <!-- Magnific popup min Js -->
      <script src="assets/js/magnific-popup.min.js"></script>
      <!-- Nice select min Js -->
      <script src="assets/js/nice-select.min.js"></script>
      <!-- Isotope pkgd min Js -->
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <!-- Waypoints Js -->
      <script src="assets/js/jquery.waypoints.js"></script>
      <!-- Script Js -->
      <script src="assets/js/script.js"></script>
   </body>
</html>
