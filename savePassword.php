
<?php
include 'dbConnection.php';
$Possword=$_POST['possword'];

$sql ="UPDATE `register` SET `password`='$Possword' WHERE `password`=''";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>
