<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="css/addnew.css">
    <title>Nominee Page</title>
</head>
<body>

	  <div class="hero" >

      <nav>
        <img src="images/r.png" class="logo">
        <ul>
          <li class="a"><a href="Home.html">Home</a></li>
          <li class="a"><a href="">Vote</a></li>
          <li class="a"><a href="">Account</a></li>
          <li class="a"><a href="">Contacts Us</a></li>
          <li class="a"><a href="">About Us</a></li>
        </ul>
        
        <div class="main">
          <input class = "search-txt" type="text" name="box" placeholder="Type to search">
          
          <div class="btn">
            <a href="#"><i class="fas fa-search"></i></a>
          </div>
        </div>
      </nav>
	<br>
<hr>
<br>
<br>
<br>





<?php
include "configg.php";
?>
<style>
    .addnew{
        padding-top:10px;
    }
</style>
<center>
<form name="form2" action="" method="post" class="form-horizontal"> 
            <div class="control-group">
                
              <label class="control-label">E Mail: </label>
			  <br>
              <div class="controls">
                <input type="text" class="span11" placeholder="Enter Email" name="email" autofocus/>
              </div>
            </div>
            <div class="control-group">
                <br><br>
				
				<br>
              <label class="control-label">Web site:</label>
			  <br>
              <div class="controls">
                <input type="text" class="span11" placeholder="Personal Web site" name="website"/>
              </div>
            </div>
       <br><br>
	   
    <div class="addnew">
	<center>
      <button type="submit" name="submit1" class="new">Add</button>
	  </center>
    </div>
	
  <br>
  
</form>
</center>
    
<?php
 if(isset($_POST["submit1"]))
 {
    $fname=$_POST['email']??"";
    $lname=$_POST['website']??"";
   
    
    mysqli_query($conn,"INSERT INTO newdetails(id,n_email,n_web)values(NULL,'$fname','$lname')");
?>
<script>
        alert("Details Updated Successfully");
        window.location="n.php";
        </script>
        <?php
 }

?>










<br>
<br>
<br>

<hr>

<br>
<br>
<br><br>
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
      
      <form action="#">
        <input type="email" id="eml" placeholder="e-mail here"><br>
        <input type="checkbox" id="chkbx">
        <h1 id="nws">Daily Newsletter</h1>
        <input type="submit" id="sbmt" value="SUBSCRIBE">
      </form> 
	  
	  
      <div>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-instagram"></a>
      </div>
     

        <hr class="hrr">

      <p class="copyright">Copyright ©2021 All Rights Reserved | System Developed By Y1 S2 Assignment Group MLB_G01_2_11</p>
      
      <br>
    </div>      


</body>
</html>