<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ////////////////////// SUBMIT PRODUCT ////////////////////////

    require_once('../php/db_con.php');

    if(isset($_POST['productSubmit'])) {
        
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productWeight = $_POST['productWeight'];

            $sql = 'INSERT INTO food_item(name, price, weight) VALUES(?, ?, ?)';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('sii', $productName, $productPrice, $productWeight);
            $stmt->execute();
            if ($stmt->affected_rows > 0){
                echo 'success';
            } else {
                echo 'Could not add the file to the database';
            }
    }

?>
