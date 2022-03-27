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
             $username = $_POST['username'];
             $email = $_POST['email'];
             $password =$_POST['password'];
             $userrole= $_POST['userrole'];
             $sql = "INSERT INTO registration (username,email,password,userrole)
             VALUES ('$username','$email','$password','$userrole')";
             if (mysqli_query($conn, $sql)) {
                header("Location:index.php");
             } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
             }
             mysqli_close($conn);
        }


        ?>