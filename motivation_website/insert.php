
<!-- databaseconnection -->
<?php include './config/database.php';?>
<!-- databaseconnection -->
<?php

if(isset($_POST['insert']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    // $email=$_POST['email'];
    // $gender=$_POST['gender'];
    // $title=$_POST['title'];
    // $author=$_POST['author'];
    // $name=$_POST['name'];
    // $number=$_POST['number'];
    // $contact=$_POST['contact'];
    // $residence=$_POST['residence'];

  $sql="INSERT INTO `motivationtb` (`id`, `username`, `email`) VALUES (NULL, '$username', '$email')";
  $query=mysqli_query($connect,$sql);
  if($query)
  {
     echo "Registered";
    header("location:fetch.php");
  }
  else
  {
      echo "Error In Registering";
  }
    // var_dump($_POST);

}

?>