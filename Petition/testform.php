<?php
// Check if the data is set
if(isset($_GET['name'], $_GET['email'], $_GET['loc'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $location = $_GET['loc'];
    $otp = $_GET['otp'];

    // Display the data
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Location:".htmlspecialchars($location)."<br>";
    echo "Otp :" .htmlspecialchars($otp)."<br>";
} else {
    echo "No data received.";
}

// adding data base 

$username = "root";
$servername = "localhost";
$password = "";
$database = "petitiondata";

$conn = mysqli_connect("$servername","$username","$password","$database");

if(!$conn){
    echo"Connection failed due to ---->".mysqli_connect_error();
}else{
    echo"Connection successfull<br>";
}

$sql = "INSERT INTO `supporters` (`Name`, `Email`, `Location`, `Otp`) VALUES ('$name', '$email', '$location', '$otp')";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo"Data cannot be inserted because --->".mysqli_error($conn);
}else{
    echo"Data inserted successfully<br>";
}
?>
