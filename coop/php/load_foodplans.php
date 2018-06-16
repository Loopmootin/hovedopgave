<?php 
    
    /*$dish_array = array();

    $sql = 'SELECT plan_id, name FROM food_plan';
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($pid, $foodplan_name);
  
    while($stmt->fetch()){
        echo '<p>Foodplan '.$pid.' '.$foodplan_name.'</p>';
        array_push($dish_array, $pid);
    }

    foreach ($dish_array as $dishes) {
        $sql = 'SELECT food_plan.name, dish_id, dish.name, image FROM dish, food_plan, food_plan_has_dish WHERE food_plan_plan_id = plan_id AND dish_dish_id = dish_id AND plan_id = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $dishes);
        $stmt->execute();
        $stmt->bind_result($did, $dish_name, $image_url);

        while($stmt->fetch()){

            echo '<p>Dishes '.$did.' '.$dish_name.'</p>';
        }
    }*/

        $sql = 'SELECT food_plan.name, dish_id, dish.name, image FROM dish, food_plan, food_plan_has_dish WHERE food_plan_plan_id = plan_id AND dish_dish_id = dish_id';
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $stmt->bind_result($foodplan_name, $did, $dish_name, $image_url);

        while($stmt->fetch()){

            echo '<p>'.$foodplan_name.'</p>';
            echo '<p>'.$dish_name.'</p>';
        }
?>