<?php

if (isset($_POST['submit'])) {
  if (isset($_POST['fname']) && isset($_POST['lname']) &&
      isset($_POST['uname']) && isset($_POST['eml']) &&
      isset($_POST['passwd'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$eml = $_POST['eml'];
$passwd = $_POST['passwd'];

include "config.php";

  if($conn->connect_error){
    die('Could not connect to the database.');
  }
  else{
    $SELECT = "SELECT uname FROM voter where uname = ? Limit 1";
    $INSERT = "INSERT into voter(fname, lname, uname, eml, passwd) values (?,?,?,?,?)";
 
    $stmt = $conn->prepare($SELECT);
     $stmt ->bind_param("s", $uname);
    $stmt->execute();
     $stmt->bind_result($resultuname);
    $stmt->store_result();
    $stmt->fetch();
    $rnum = $stmt->num_rows;

     if ($rnum == 0) {
     $stmt->close();

    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sssss", $fname, $lname, $uname, $eml, $passwd);
      if ($stmt->execute()) {
          // echo "Account Created Sucessfully.";
          echo "<script>alert('Account Created Sucessfully.');location.href = 'home.php'</script>";
      }
      else {
          echo $stmt->error;
      }
 }
  else {
    echo "<script>alert('Someone already registers using this username.');location.href = 'signupn.html'</script>";
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