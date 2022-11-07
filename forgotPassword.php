<?php
include 'dbConnection.php';
$Nickname=$_POST['Nickname'];
$password=$_POST['password'];

$updateQuery = "UPDATE `register` SET `password`='$password' WHERE `Nickname` = '$Nickname'";
mysqli_query($conn,$updateQuery);
if (mysqli_affected_rows($conn) > 0) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>