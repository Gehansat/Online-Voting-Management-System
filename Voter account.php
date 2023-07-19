<?php
    // query for user has upload or not the img
    $sql = "SELECT * FROM file WHERE username = ?" ;
    $stmt = mysqli_prepare ($connect ,$sql);
    mysqli_stmt_bind_pram ($stmt , "i" , $_SESSION ['username']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $userImage = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    
    $userImage = $_POSt['file'];
    if ($userImage ['is_set'] == 0){
        echo '<img src = "profile_pics/default-profile-pic.png"/>';

    }
    else{
        echo '<img src = "'.$userImage ['image_dir'].'"/>';

    }
   

if (isset($_POST['reset'])) {
  if (isset($_POST['fname']) && isset($_POST['lname']) &&
      isset($_POST['uname'])
      {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $eml = $_POST['eml'];
   

include "config.php";

  if($conn->connect_error){
    die('Could not connect to the database.');
  }
  else{
    $SELECT = "SELECT uname FROM voter where uname = ? Limit 1";
    $INSERT = "INSERT into voter(fname, lname, uname, eml) values (?,?,?,?)";
 
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
    $stmt->bind_param("ssss", $fname, $lname, $uname, $eml);
      if ($stmt->execute()) {
          // echo "Account updated Sucessfully.";
          echo "<script>alert('Account Created Sucessfully.');location.href = 'home.php'</script>";
      }
      else {
          echo $stmt->error;
      }
 }
  else {
    echo "<script>alert('Someone already registers using this username.');location.href = 'Voter acc.html'</script>";
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
    echo "Update button is not set";
}
?> 





?>