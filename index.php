<!DOCTYPE html>
<html>
<title>Banking System</title>   
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;


}
</style>


<!-- Navbar (sit on top) -->
<header class="w3-container w3-theme-dark w3-padding" id="myHeader">

    <div class="w3-left w3-hide-small">
    <img src="images/logoo.png" class="w3-bar-item ">
    </div>

    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      
      <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT US</a>
      <a href="#function" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    

    
  </div>
</div>
   <br>
<br>
 <div class="w3-center"><br><br><br>
  <h1 class="w3-xxxlarge w3-animate-bottom w3-text-black w3-monospace">Welcome To TSF Bank <i class="fa fa-university"></i></h1>  
    <div class="w3-padding-25">
      <h1 class="w3-cursive"><i> "You are not our another Customer, you are our valued Customer"</i></h1>
      
    </div>
<br>
<br>
  </div>
</header>



<div class="w3-row-padding w3-center w3-margin-top" id="function">
<div class="w3-third">                                                   
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Customers</h3>
  <br>
  <i class="fa fa-users w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <div class="w3-padding-32">
      <a href="getdetail.php">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" id="button "type="button" href="getdetail.php" style="font-weight:900;">All Customers</button></a>
    </div>
               
					
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>MoneyTransfer</h3><br>
  <i class="fa fa-money w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
<div class="w3-padding-32">
      <a href="transfer.php">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" id="button "type="button" style="font-weight:900;">Money Transfer
</button></a>
    </div>

  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Transactions</h3><br>
  <i class="fa fa-exchange w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
<div class="w3-padding-32">
      <a href="transaction.php">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" id="button "type="button" style="font-weight:900;">All Transactions</button>
    </a></div>
 
  </div>
</div>
</div>

<!-- About Section -->
<div class="w3-container w3-theme-dark w3-padding" style="padding:128px 16px;font-family: Arial" id="about">
  <h3 class="w3-center">ABOUT THE BANK</h3>
  <p class="w3-center w3-large">Key features of our bank</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-lock w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Reliable</p>
      <p>It concern about the reliability and safety of financial information that records and present in the entity’s financial statements as well as for reliable money transactions</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">User-Friendly Interface</p>
      <p>User Interface Design focuses on anticipating what users might need to do and ensuring that the interface has elements that are easy to access, 
understand, and use to facilitate those actions.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Quality Service</p>
      <p>Service quality is linked to consumer satisfaction and generally is viewed as the output of the service delivery system, especially in the case of pure service systems.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Customer Support is provided 24*7 as well as customer services are provided through Email and Call. </p>
    </div>
  </div>
</div>



<!-- Contact Section -->
<div class="w3-container w3-light-grey"  id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> TCS, India</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 978564321</p>             
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: tsf@mail.com</p>
    <br>
  </div>
</div>

<!-- Footer -->


<footer class="w3-center w3-container w3-theme-dark w3-padding-16" style="padding:128px 16px"  >

  <a href="#myHeader" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>

</script>

</body>
</html>


