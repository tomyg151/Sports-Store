
<?php
include 'dbConnection.php';
$Email=$_POST['Email'];
$sql= "SELECT * FROM `products` WHERE `email`='$Email'";
$result = mysqli_query($conn,"SELECT * FROM `products` WHERE `email`='$Email'");
$datas = array();
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $datas[]=$row;
    }
}
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>

<html>
<td><input type="text" size="50" value="<?php echo $datas; ?>"/></td>
</html>