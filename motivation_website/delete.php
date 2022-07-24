
<!-- databaseconnection -->
<?php include './config/database.php'?>
<!-- databaseconnection -->
<?php

// if($connect)
// {
//     echo "connected successfully";
// }
// else
// {
//     echo "connection failed";
// }
echo $id=$_GET['id'];
$delete="DELETE FROM motivationtb WHERE id='$id'";
$query=mysqli_query($connect,$delete);
header("location:fetch.php");
?>