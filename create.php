<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $gender = $_POST['gender'];
    
    $email = $_POST['email'];

    $phone = $_POST['phone'];


    $sql = "INSERT INTO `Users`(`firstname`, `lastname`, `gender`, `email`, `phone`) VALUES ('$first_name','$last_name'
,'$gender','$email','$phone')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female
    <br>

    email:<br>

    <input type="email" name="email">

    <br>

    Phone:<br>

    <input type="text" name="phone">

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>
      <p>
         Go back to home page: <a href="https://ec2-18-220-146-166.us-east-2.compute.amazonaws.com/index.html">here</a>
      </p>
</body>

</html>
