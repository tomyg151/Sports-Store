
<?php
    require_once('dbConnection.php');
 
    function get_product($conn , $term){ 
    $query = "SELECT * FROM product WHERE product_name LIKE '%".$term."%' ORDER BY product_name  ASC";
    $result = mysqli_query($conn, $query); 
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $data; 
    }
    
    if (isset($_GET['term'])) {
    $getproduct = get_product($conn, $_GET['term']);
    $productList = array();
    foreach($getproduct as $product){
    $productList[] = $product['product_name'];
    }
    echo json_encode($productList);
    }
?>
