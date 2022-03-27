<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "bf1645be8bb16a";
$password = "a4a58033";
$dbname = "heroku_01b83c7e34538e0";

// Create connection

$conn=mysqli_connect($servername,$username,$password,"$dbname");
	  if(!$conn){
		  die('Could not Connect MySql Server:');
		}

        if(isset($_POST['submit']))
        {    
             $name = $_POST['name'];
             $email = $_POST['email'];
             $subject = $_POST['subject'];
             $message = $_POST['message'];
             $sql = "INSERT INTO contact (name,email,subject,message)
             VALUES ('$name','$email','$subject','$message')";
             if (mysqli_query($conn, $sql)) {
               header("Location:index.php");
             } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
             }
             mysqli_close($conn);
        }


        ?>