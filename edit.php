<?php
include 'dbConnection.php';
$Pname=$_POST['Pname'];
$Namount=$_POST['Namount'];
$Nname=$_POST['Nname'];

$result = mysqli_query($conn,"UPDATE `products` SET `amount`='$Namount', `name`='$Nname' WHERE `name`='$Pname'");
if ($conn->affected_rows) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>