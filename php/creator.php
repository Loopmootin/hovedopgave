<?php 

    ////////////////////// SUBMIT PRODUCT ////////////////////////
    if(isset($_POST['productSubmit'])) {
        
        $productName = $_POST['productName'];
        $productWeight = $_POST['productName'];
        $productPrice = $_POST['productName'];

        $sql = 'INSERT INTO product(name, weight, price) VALUES(?, ?, ?)';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('sii', $productName, $productWeight, $productPrice);
            $stmt->execute();
            if ($stmt->affected_rows > 0){
                echo 'Filedata added to the database :-)';
            } else {
                echo 'Could not add the file to the database';
            }
    }

?>
