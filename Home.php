<?php
  session_start(); 
  // $_SESSION['uname']= 'dsubv';       
?>

<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width , intial-scale=1.0">
    <title>Home</title>
    <link rel = "icon" href = "Images/lg.png" type = "image/x-icon" >
    <link rel="stylesheet" href="CSS/home.css">
    
    <script src="https://kit.fontawesome.com/412bbd0b8f.js" crossorigin="anonymous"></script>
    

  </head>

  <body>
    <div class="hero" >

      <nav>
        <img src="images/r.png" class="logo">
        <ul>
          <li class="a"><a href="Home.php">Home</a></li>
          <li class="a"><a href="voting page.html">Vote</a></li>
          <?php
          if(isset($_SESSION['uname'])){
            echo "<li class='a'><a href='Voter acc.html'>Account</a></li>";
          }          
          
          ?>
          <!-- <li class="a"><a href="">Account</a></li> -->
          <li class="a"><a href="contactus.html">Contacts Us</a></li>
          <li class="a"><a href="About.html">About Us</a></li>
        </ul>
        
        <div class="main">
          <input class = "search-txt" type="text" name="box" placeholder="Type to search">
          
          <div class="btn">
            <a href="#"><i class="fas fa-search"></i></a>
          </div>
        </div>
      </nav>
      
      <hr>
      
      <div class="slideshow-container">

        <div class="mySlides fade">
          
          <img src="Images/k.jpg" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          
          <img src="Images/i.jpg" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          
          <img src="Images/j.jpg" style="width:100%">
          
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        </div>
        <script type="text/javascript" src="Js/Home.js"></script>
        <hr>

        <br>

      
        <center>

        <div class="txt">
        <?php
        // $_SESSION['uname'] = 1;
        // session_destroy();
          if(isset($_SESSION['uname'])){
            echo "<h1>If you don't vote, you don't count.<button  class='button1'><a style='text-decoration:none; color='white'; href = 'voting page.html'>Vote Now</a></button></h1>";
          }         
          else{
            echo "<h1>New / Returnig voter.<button href = 'Login.html' class='button1' ><a style='text-decoration:none; color='white'; href = 'voting page.html'>Login/ Signup<a></button></h1>";
          } 
          
          ?>
          
        </div>
      </center>

      <div class="ad">
        <img src="Images/ad.jpg" width="1902.5px" height="300px">
      </div>
      
      <br>
      <br>

      <div class="lg">
        <img src="Images/lg.png" width="180px" height="360px">        
      </div>

      <div class="para">
        <p>Onset Awards proudly announce that this is the only tele/film awarding ceremony in the region held within the 1st quarter immediately after the end of year under review. No doubt that both artists and television viewers will welcome this move to evaluate the TV program while they are still live in good memories of them, despite the challenges in evaluating and organizing the event in such a short span of time</p>
      </div>

      <div class="sub">
        SUBSCRIBE TO OUR NEWS LETTER 
      </div>
      
      <form method="post" id="form-subscribe" action="submit.php">
        <input type="email" name="email" id="eml" placeholder="e-mail here"><br>
        <input type="checkbox" id="chkbx">
        <h1 id="nws">Daily Newsletter</h1>
        <input type="submit" id="sbmt" value="SUBSCRIBE">
      </form> 

      <script type="text/javascript" src="Js/custom.js"></script>
      
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-instagram"></a>
      
     

        <hr class="hrr">

      <p class="copyright">Copyright ©2021 All Rights Reserved | System Developed By Y1 S2 Assignment Group MLB_G01_2_11</p>
      
      <br>
        
        
  </div>      
  </body>
</html>