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
             $address= $_POST['address'];
             $city= $_POST['city'];
             $state= $_POST['state'];
             $zipcode= $_POST['zipcode'];
             $cardfullname= $_POST['cardfullname'];
             $creditcardnumber= $_POST['creditcardnumber'];
             $expirymonth= $_POST['expirymonth'];
             $expiryyear= $_POST['expiryyear'];
             $cvv= $_POST['cvv'];
             $sql = "INSERT INTO billing (name,email,address,city,state,zipcode,cardfullname,creditcardnumber,expirymonth,expiryyear,cvv)
             VALUES ('$name','$email','$address','$city','$state','$zipcode','$cardfullname','$creditcardnumber','$expirymonth','$expiryyear','$cvv')";
             if (mysqli_query($conn, $sql)) {
                header("Location:index.php");
             } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
             }
             mysqli_close($conn);
        }


        ?>