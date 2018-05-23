<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ////////////////////// SUBMIT PRODUCT ////////////////////////

    require_once('../php/db_con.php');

    if(isset($_POST['productSubmit'])) {
        
        $productName = $_POST['productName'];
        $productWeight = $_POST['productWeight'];
        $productPrice = $_POST['productPrice'];

            $sql = 'INSERT INTO product(name, weight, price) VALUES(?, ?, ?)';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('sii', $productName, $productWeight, $productPrice);
            $stmt->execute();
            if ($stmt->affected_rows > 0){
                echo 'success';
            } else {
                echo 'Could not add the file to the database';
            }
    }

?>
