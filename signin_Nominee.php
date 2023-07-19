<?php
$host = "localhost";
$Username = "root";
$Password = "";
$dbname = "nominee_login";

$conn = mysqli_connect($host, $Username, $Password, $dbname);

$ncode = $_POST['ncode'];
$passwd = $_POST['passwd'];

    $query = mysqli_query($conn, "SELECT ncode,passwd FROM signin WHERE ncode='$ncode' AND passwd='$passwd'");

    $result_can = mysqli_query($conn, $query);
    
    $INSERT = "INSERT into signin_nominee( ncode, passwd) values (?,?)";

    while ($row = mysql_fetch_assoc($result_can)) {


      $check_ncode = $row['ncode'];
      $check_passwd = $row['passwd'];
  }

  if ($ncode == $check_ncode && $passwd == $check_passwd){
    $message = "ok";
      
          // echo "sign in sucessfully.";
          echo "<script>alert('Login success.');location.href = 'home.php'</script>";
      
 }
  else {
    $message = "No";
    echo "<script>alert('Login unsuccess.');location.href = 'login.html'</script>";
  }

?> 