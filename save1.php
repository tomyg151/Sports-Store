
<?php
include 'dbConnection.php';
$email=$_POST['email'];
$Nickname=$_POST['Nickname'];
$Phone=$_POST['Phone'];


$sql = "INSERT INTO `Register`( `email`, `Nickname`,`PhoneNumber`,`password`) 
VALUES ('$email','$Nickname','$Phone','')";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>

