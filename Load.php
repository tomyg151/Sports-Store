
<?php
include 'dbConnection.php';
$email=$_POST['email'];
$password=$_POST['password'];

$result = mysqli_query($conn,"SELECT `Email`,`password` FROM `register` WHERE `Email` = '$email' AND `password` = '$password'");
if ( mysqli_num_rows($result)!=0) {
    
    echo json_encode(array("statusCode"=>200));
} 
else if( mysqli_num_rows($result)==0) {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>

