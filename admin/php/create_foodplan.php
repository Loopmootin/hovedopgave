<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('../php/db_con.php');
   

    if(isset($_POST['foodplanSubmit'])) {

        $foodplanName = filter_input(INPUT_POST, 'foodplanName')
            or die('Missing/illegal title parameter!!!<br>');

        $dishes = filter_input(INPUT_POST, 'dishes', FILTER_DEFAULT , FILTER_REQUIRE_ARRAY)
            or die('Missing/illegal food parameter!!!<br>');


        $sql = 'INSERT INTO food_plan(name) VALUES(?)';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('s', $foodplanName);
        $stmt->execute();
        $latest_id = $con->insert_id;
        if ($stmt->affected_rows > 0){
            echo 'success';
        
            foreach ($dishes as $dish) {
            echo 'Dish id '.$dish.'<br>';
            echo 'Foodplan id '.$latest_id.'<br>';
            $sql = 'INSERT INTO food_plan_has_dish(food_plan_plan_id, dish_dish_id) VALUES(?, ?)';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('ii', $latest_id, $dish);
            $stmt->execute();
            if ($stmt->affected_rows > 0){
                echo 'Dish added to the foodplan :-)<br>';
            } else {
                echo 'Could not add Dish to the foodplan <br>';
            }
        }
        
        } else {
            echo 'Could not add the file to the database';
        }
    }

?>
