<!-- databaseconnection -->
<?php include './config/database.php'?>
<!-- databaseconnection -->

<?php

$select="SELECT * FROM motivationtb";
$query=mysqli_query($connect,$select);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fetched Data</title>

    </head>
    <body>
        <table border="1">
            <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>email</th>
            <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
            while($rows=mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><?php echo $rows['id']?></td>
                    <td><?php echo $rows['username']?></td>
                    <td><?php echo $rows['email']?></td>
                
                    <td><a href="update.php?id=<?php echo $rows['id'];?>">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $rows['id'];?>">Delete</a></td>
                </tr>
                <?php
            }
                ?>
            </tbody>
              <!-- link -->
    <a href="index.php">Make Consultaions Now</a>
    <!-- link -->
        </table>
    </body>
</html>
