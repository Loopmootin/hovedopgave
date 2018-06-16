<?php 
    session_start();

    $dish_array = $_SESSION["dish_array"];

    foreach ($dish_array as $dishes) {
        $sql2 = 'SELECT dish_id, dish.name, image FROM dish, food_plan, food_plan_has_dish WHERE food_plan_plan_id = plan_id AND dish_dish_id = dish_id AND plan_id = ?';
        $stmt2 = $con->prepare($sql2);
        $stmt2->bind_param('i', $dishes);
        $stmt2->execute();
        $stmt2->bind_result($did, $dish_name, $image_url);

        while($stmt2->fetch()){
            echo '<p>'.$dish_name.'</p>';
        }
    }

?>