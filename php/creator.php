<?php 

    ////////////////////// SUBMIT PRODUCT ////////////////////////
    if(isset($_POST['submit'])) {
        
        echo 'HEJHEJHEJ';

        $name = filter_input(INPUT_POST, 'name')
                    or die('Missing/illegal username parameter');
                    
        $weight = filter_input(INPUT_POST, 'weight')
                    or die('Missing/illegal username parameter');
                    
        $price = filter_input(INPUT_POST, 'price')
					or die('Missing/illegal username parameter');

        $sql = 'INSERT INTO product(name, weight, price) VALUES(?, ?, ?)';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('sii', $name, $weight, $price);
            $stmt->execute();
            if ($stmt->affected_rows > 0){
                echo 'Filedata added to the database :-)';
            } else {
                echo 'Could not add the file to the database';
            }
    }



?>