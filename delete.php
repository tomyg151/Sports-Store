<?php
include 'dbConnection.php';
$Pname=$_POST['Pname'];

$result = mysqli_query($conn,"DELETE from `products` WHERE `name`='$Pname'");
if ( $conn->affected_rows) {
    
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>