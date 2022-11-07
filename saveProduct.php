
<?php
include 'dbConnection.php';
$name=$_POST['name'];
$amount=$_POST['amount'];
$Email=$_POST['Email'];




$sql = "INSERT INTO `products`( `name`, `amount`,`email`) 
VALUES ('$name','$amount','$Email')";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>

