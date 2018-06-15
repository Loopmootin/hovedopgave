<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ////////////////////// SUBMIT FOODPLAN ////////////////////////

    require_once('../php/db_con.php');

    if(isset($_POST['foodplanSubmit'])) {

        $foodplanName = filter_input(INPUT_POST, 'foodplanName')
            or die('Missing/illegal title parameter!!!<br>');

        $dishes = filter_input(INPUT_POST, 'dishes')
            or die('Missing/illegal dish parameter!!!<br>');
        
        

            $sql = 'INSERT INTO food_item(name, price, weight) VALUES(?, ?, ?)';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('sii', $productName, $productPrice, $productWeight);
            $stmt->execute();
            $latest_id = $con->insert_id;
            if ($stmt->affected_rows > 0){
                echo 'success';
            /*
                foreach ($foodArray as $arrayItem) {
                echo 'Array item'.$arrayItem.'<br>';
                $sql = 'INSERT INTO food_item_has_dish(food_item_food_id, dish_dish_id) VALUES(?, ?)';
                $stmt = $con->prepare($sql);
                $stmt->bind_param('ii', $arrayItem, $latest_id);
                $stmt->execute();
                if ($stmt->affected_rows > 0){
                    echo 'Food items added to the dish :-)<br>';
                } else {
                    echo 'Could not add Food items to the dish <br>';
                }
            }
            */
            } else {
                echo 'Could not add the file to the database';
            }
    }

?>
