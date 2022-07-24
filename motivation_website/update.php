<!-- databaseconnection -->
<?php include './config/database.php'?>
<!-- databaseconnection -->

<?php
$id=$_GET['id'];
$sql="SELECT * FROM motivationtb WHERE id='$id'";
$query=mysqli_query($connect,$sql);
while($rows=mysqli_fetch_array($query))
{
    $username=$rows['username'];
    $email=$rows['email'];
    
}
if(isset($_POST['update']))
{
    
    $username=$_POST['username'];
    $email=$_POST['email'];

  $sql="UPDATE `motivationtb` SET `username` = '$username', `email` = '$email' WHERE `motivationtb`.`id` = $id";
  $query=mysqli_query($connect,$sql);
  if($query)
  {
      header("location:fetch.php");
  }else{
      echo "Ërror in updating";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/CodeIgniter-3/assets/registration.css">
    <link href="http://localhost/CodeIgniter-3/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h3></h3>
   <div class="container shadow-lg rounded  ">
   <center> <h3>UPDATE</h3></center><hr>

 <form action="" class="border bg-light rounded text-primary" method="post" enctype="multipart/formdata">
    <div class="row">
        <div class="col-6">
            <label for="">USERNAME</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username?>" >   
        </div>
        <div class="col-6">
            <label for="">EMAIL</label>
            <input type="lname" name="email" class="form-control" value="<?php echo $email?>">
        </div>
    </div>
    <div>
    <button type="submit" name="update" class="btn btn-primary ml-5">Update</button>
    <!-- <input type="submit" name="submit" value="submit"> -->
    </div>
    </form>
   </div>
</body>
</html>