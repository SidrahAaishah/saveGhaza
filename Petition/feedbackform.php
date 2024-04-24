<?php
// Check if the data is set
if(isset($_GET['name'], $_GET['email'], $_GET['email'],$_GET['phone'],$_GET['Queries'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $Queries = $_GET['Queries'];

    // Display the data
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Phone:".htmlspecialchars($phone)."<br>";
    echo "Queries :" .htmlspecialchars($Queries)."<br>";
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

$sql = "INSERT INTO `feedback` (`Name`, `Email`, `Phone`, `Feedback`) VALUES ('$name', '$email', '$phone', '$Queries')";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo"Data cannot be inserted because --->".mysqli_error($conn);
}else{
    echo"Data inserted successfully<br>";
}
?>
