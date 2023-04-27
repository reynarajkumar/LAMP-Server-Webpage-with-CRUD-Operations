<?php 
    include "config.php"; 

    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];
        $sql = "DELETE FROM `Users` WHERE `id`='$user_id'";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "Record deleted successfully.";
        }
        else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
?>

<html>
    <body>
    <p>
             Go back to home page: <a href="https://ec2-18-220-146-166.us-east-2.compute.amazonaws.com/index.html">here</a>
    </p>
    </body>
</html>
