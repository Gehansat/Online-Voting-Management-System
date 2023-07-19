<?php
include "configg.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="CSS/n.css">
    <title>Nominee Page</title>
</head>
<body>

	  <div class="hero" >

      <nav>
        <img src="images/r.png" class="logo">
        <ul>
          <li class="a"><a href="Home.php">Home</a></li>
          <li class="a"><a href="voting page.html">Vote</a></li>
          <li class="a"><a href="n.php">Account</a></li>
          <li class="a"><a href="Contactus.html">Contacts Us</a></li>
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



<div class="profilephoto">
  <img src="Images/d.jpg"width="250px" height="250px" class="pr"> 
</div>


<div class="deatails">

<table id="customers" class="tble3" >
  <thead >
    <tr>
      <th>Your Name</th>
      <th>Address</th>
      <th>Contact Number</th>
      <th>Username</th>
      <th>Password</th>
      <th>edit</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $res=mysqli_query($conn,"SELECT*FROM nomineed");
    while($row=mysqli_fetch_array($res)){
    ?>
    <tr>
       <td> <?php echo $row["n_name"];?></td>
       <td> <?php echo $row["n_add"];?></td>
       <td> <?php echo $row["n_contact"];?></td>
       <td> <?php echo $row["n_uname"];?></td>
       <td> <?php echo $row["n_ps"];?></td>
       <td>  <a href="edit_no.php?id=<?php  echo $row["id"];?>"style="color:red" >Edit</a></td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>
</div>
<center>
<div class="btn1">
  <a href="addnewd.php">
    <button class="nwbtn"> Add new details</button>
  </a>
</div>
</center>

<div class="tbl2">
  <table id="customers">
  <thead>
    <tr>
      <th>Email</th>
      <th>website</th>
      <th>Delete</th>
      
    </tr>
  </thead>
  <tbody>
    <?php

    $res=mysqli_query($conn,"SELECT*FROM newdetails");
    while($row=mysqli_fetch_array($res)){
    ?>
    <tr>
       <td> <?php echo $row["n_email"];?></td>
       <td> <?php echo $row["n_web"];?></td>
       <td>  <a href="delete_no.php?id=<?php  echo $row["id"];?>"style="color:red" >Delete</a></td>
    </tr>
    <?php
    }
    ?>
</tbody>
  </table>
</div>

	<!-------------------------------------------------------------------------->
	
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
      
      <form method="post" id="form-subscribe" action="submit.php">
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