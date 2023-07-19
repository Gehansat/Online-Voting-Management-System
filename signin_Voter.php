<?php
$host = "localhost";
$Username = "root";
$Password = "";
$dbname = "iwt";

$conn = mysqli_connect($host, $Username, $Password, $dbname);

$uname = $_POST['uname'];
$passwd = $_POST['passwd'];

    $query = mysqli_query($conn, "SELECT uname,passwd FROM signin WHERE uname='$uname' AND passwd='$passwd'");

    $result_can = mysqli_query($conn, $query);
    
    $INSERT = "INSERT into signin( uname, passwd) values (?,?)";

    while ($row = mysql_fetch_assoc($result_can)) {


      $check_uname = $row['uname'];
      $check_passwd = $row['passwd'];
  }

  if ($uname == $check_uname && $passwd == $check_passwd){
    $message = "ok";
      
          echo "<script>alert('Login success.');location.href = 'home.php'</script>";
      
 }
  else {
    $message = "No";
    echo "<script>alert('Login unsuccess.');location.href = 'login.html'</script>";
  }

?> 