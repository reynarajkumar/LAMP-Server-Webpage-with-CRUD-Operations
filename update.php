<?php 

include "config.php";
    if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$firstname = $_POST['Firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	    
        $sql = "UPDATE `Users` SET `Firstname`='$firstname',`Lastname`='$lastname',`Gender`='$gender',`Email`='$email',`Phone`='$phone' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {
            echo "Record updated successfully.";
        }
	else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 

if (isset($_GET['id'])) {
	$id = $_GET['id']; 
	$sql = "SELECT * FROM `Users` WHERE `id`='$id'";
	$result = $conn->query($sql); 

	if ($result->num_rows > 0) {        

	    while ($row = $result->fetch_assoc()) {
		$first_name = $row['Firstname'];
		$lastname = $row['Lastname'];
		$gender = $row['Gender'];
		$email = $row['Email'];
		$phone  = $row['Phone'];
		$id = $row['id'];
	    } 
	?>

		<h2>User Update Form</h2>
		<form action="" method="post">
		  <fieldset>

		    <legend>Personal information:</legend>

		    First name:<br>
		    <input type="text" name="Firstname" value="<?php echo $first_name; ?>">
		    <input type="hidden" name="id" value="<?php echo $id; ?>">
		    <br>

		    Last name:<br>
		    <input type="text" name="lastname" value="<?php echo $lastname; ?>">
		    <br>

		    Gender:<br>
		    <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male
		    <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female
		    <br>

		    Password:<br>
		    <input type="email" name="email" value="<?php echo $email; ?>">
		    <br>

		    Phone:<br>
		    <input type="phone" name="phone" value="<?php echo $phone; ?>">
		    <br><br>

		    <input type="submit" value="Update" name="update">

		  </fieldset>

		</form> 

		<p>
		      Go back to home page: <a href="https://ec2-18-220-146-166.us-east-2.compute.amazonaws.com/index.html">here</a>
		</p>

		</body>
		</html> 

	<?php

	} 
	else{ 
		header('Location: view.php');
	}
}
?>
