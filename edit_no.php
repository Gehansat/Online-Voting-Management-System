<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="CSS/editno.css">
    <title>Nominee Page</title>
</head>
<body>

	  <div class="hero" >

      <nav>
        <img src="images/r.png" class="logo">
        <ul>
          <li class="a"><a href="Home.php">Home</a></li>
          <li class="a"><a href="voting page.html">Vote</a></li>
          <li class="a"><a href="voter acc.html">Account</a></li>
          <li class="a"><a href="contactus.html">Contacts Us</a></li>
          <li class="a"><a href="about.html">About Us</a></li>
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

$id=$_GET["id"];
    $name="";
    $address="";
    $contactno="";
    $username="";
    $password="";
  
$res=mysqli_query($conn,"SELECT * FROM `nomineed` WHERE id=$id ");
while($row=mysqli_fetch_array($res))
{
    $name=$row["n_name"];
    $address=$row["n_add"];
    $contactno=$row["n_contact"];
    $username=$row["n_uname"];
    $password=$row["n_ps"];
    
}
?>
<div class="widget-content nopadding">
<center>
  <form name="form2" action="" method="post" class="form-horizontal"> 
    <div class="control-group">
      <label class="control-label">Your Name :</label>
	  <br>
      <div class="controls">
        <input type="text" class="span11" placeholder="First name" name="name" value="<?php echo $name; ?>" autofocus/>
      </div><br>
	  
    </div>
    <div class="control-group">
      <label class="control-label">Address :</label><br>
      <div class="controls">
        <input type="text" class="span11" placeholder="Last name" name="address"value="<?php echo $address; ?>"/>
      </div><br>
    </div>
    <div class="control-group">
      <label class="control-label">Contact Number :</label><br>
      <div class="controls">
        <input type="text" class="span11" placeholder="User Name" name="contactno"  value="<?php echo $contactno; ?>"/>
      </div><br>
    </div>
    <div class="control-group" >
      <label class="control-label">Username :</label><br>
      <div class="controls">
        <input type="text"  class="span11" placeholder="Enter Password" name="username" required value="<?php echo  $username; ?>"/>
      </div><br>
    </div>
    <div class="control-group">
      <label class="control-label">Password :</label><br>
      <div class="controls">
        <input type="password"  class="span11" placeholder="Enter Password" name="upassword" readonly value="<?php echo  $password; ?>"/>
      </div><br>
    </div>
    </center>
      </div>
    
        
    <br>
	<br>
	<br><br>
        <div class="form-actions">
		<center>
      <button type="submit" name="submit1" class="neww">Update</button>
	  </center>
    </div>
    
    
<?php
 if(isset($_POST["submit1"]))
 {
    mysqli_query($conn,"UPDATE `nomineed` SET n_name='$_POST[name]',n_add='$_POST[address]',n_contact='$_POST[contactno]',n_uname='$_POST[username]' WHERE id=$id")or die(mysqli_error($conn));
?>
<script>
        alert("User Details Updated Successfully");
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