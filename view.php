<?php 

include "config.php";

$sql = "SELECT * FROM Users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Gender</th>

        <th>Email</th>

 <th>Phone</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['Firstname']; ?></td>

                    <td><?php echo $row['Lastname']; ?></td>

                    <td><?php echo $row['Gender']; ?></td>

      <td><?php echo $row['Email']; ?></td>

                    <td><?php echo $row['Phone']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="
btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 
      <p>
         Go back to home page: <a href="https://ec2-18-220-146-166.us-east-2.compute.amazonaws.com/index.html">here</a>
      </p>
</body>

</html>
