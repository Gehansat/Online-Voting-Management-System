<?php 

 session_start();

include('connection.php');

if(!isset($_SESSION['user_id'])){

header('Location : admin login.php');

}

 //write query for all pizzas
$sql = 'SELECT * FROM nominee';

//make query and get result
$result = mysqli_query($connection, $sql);


//fetch the resulting rows as an array
$nominee = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);



 if(isset($_POST['add'])){

    $key = $_POST['keyToAdd'];
    
    //check if the records exist to delete or not
    $check = mysqli_query($connection,"SELECT * FROM nominee WHERE ncode = '$key' ") or die("not Added");
    
    if(mysqli_num_rows($check)>0){
        //if records found and deleted
    
        $delete = mysqli_query($connection,"INSERT INTO nomineev SELECT * FROM nominee WHERE ncode = '$key'") or die("Not Added");
            
    }else {
        echo "Recode does not exsist!";
    }
            }






//close connectionection
mysqli_close($connection);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/AddNominee.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container">
        <nav>
            <img src="images/r.png" class="logo">
            <button class="logout"><a href="admin logout.php">LOG OUT</a></button>
        </nav>
        <hr>
        <br><br><br>
        <a class="title">Add Nominee</a>
        <br>



        <div class="table">
            <table id="customers">
                <tr>
                    <th>Nominee Code</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Add Nominee</th>
                </tr>

                <?php foreach($nominee as $nom): ?>

                <tr>
                    <form action="AddNominee.php" method="POST" role="form">
                        <td><?php echo htmlspecialchars($nom['ncode']); ?></td>
                        <td><?php echo htmlspecialchars($nom['fname']." ".$nom['lname']); ?></td>
                        <td><?php echo htmlspecialchars($nom['eml']); ?></td>
                        <input type="hidden" name="keyToAdd" value="<?php echo $nom['ncode'];?>">
                        <td><input class="add-btn" type="submit" name="add" value="ADD"></td>
                    </form>
                </tr>

                <?php endforeach; ?>
            </table>
        </div>

        <?php if(isset($_POST['add'])){ ?>
        <center>
            <diV class="alert">
                <span class="close" onclick="this.parentElement.style.display='none';">&times</span>
                <h2 id="">Nominee added
                </h2>
            </diV>
        </center>
        <?php } ?>



        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





        <hr class="bottom-hr">

        
    <p class="copyright">Copyright ©2021 All Rights Reserved | System Developed By Y1 S2 Assignment Group MLB_G01_2_11</p>
        

        <br>
    </div>

    <!-- js -->



</body>

</html>