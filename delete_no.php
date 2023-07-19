<?php

include "configg.php";

$id=$_GET["id"];
$data=mysqli_query($conn,"DELETE FROM newdetails WHERE id=$id");
if ($data)
{
    ?>
    <script>
    
    alert("Details Deleted Successfully!!!!");
    window.location="n.php";
    </script>
    
    <?php
    

}
else{
    echo"Delete Unsuccessfull!!";
}
?>