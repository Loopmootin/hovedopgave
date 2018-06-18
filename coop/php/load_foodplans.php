<?php 

    $sql = 'SELECT food_plan.plan_id, food_plan.name FROM food_plan';
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($foodplan_id, $foodplan_name);
  
    while($stmt->fetch()){
        echo '<div class="crate-item">';        
        echo    '<div class="crate-text">';        
        echo        '<h3>'.$foodplan_name.'</h3>';   

        $sql2 = 'SELECT dish_id, dish.name, image, food_plan_has_dish.food_plan_plan_id, food_plan_has_dish.dish_dish_id FROM dish, food_plan, food_plan_has_dish WHERE food_plan_plan_id = plan_id AND dish_dish_id = dish_id AND plan_id = ?';
        $stmt2 = $con->prepare($sql2);
        $stmt2->bind_param('i', $foodplan_id);
        $stmt2->execute();
        $stmt2->bind_result($dish_id, $dish_name, $image_url);
        
        while($stmt->fetch()){ 
            echo '<p>'.$dish_name.'</p>';
        }

        echo    '</div>';        
        echo '</div>';    
        
    }

?>