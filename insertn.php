<?php

if (isset($_POST['submit'])) {
  if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['ncode']) && isset($_POST['eml']) && isset($_POST['passwd'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$ncode = $_POST['ncode'];
$eml = $_POST['eml'];
$passwd = $_POST['passwd'];

include "config.php";

  if($conn->connect_error){
    die('Could not connect to the database.');
  }
  else{
    $SELECT = "SELECT ncode FROM nominee where ncode = ? Limit 1";
    $INSERT = "INSERT into nominee(fname, lname, ncode, eml, passwd) values (?,?,?,?,?)";
 
    $stmt = $conn->prepare($SELECT);
     $stmt ->bind_param("s", $ncode);
    $stmt->execute();
     $stmt->bind_result($resultncode);
    $stmt->store_result();
    $stmt->fetch();
    $rnum = $stmt->num_rows;

     if ($rnum == 0) {
     $stmt->close();

    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sssss", $fname, $lname, $ncode, $eml, $passwd);
      if ($stmt->execute()) {
          // echo "New record inserted sucessfully.";
          echo "<script>alert('Account Created Sucessfully.');location.href = 'home.php'</script>";
      }
      else {
          echo $stmt->error;
      }
 }
  else {
      // echo "Someone already registers using this email.";
      echo "<script>alert('Someone already registers using this nominee code.');location.href = 'signupn.html'</script>";
  }
  $stmt->close();
  $conn->close();
  }
}
else{
  echo "All field are required";
  die();
}
}
else{
    echo "Submit button is not set";
}
?> 