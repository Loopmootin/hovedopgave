

   <?php 
    $sql = 'SELECT food_plan.plan_id, food_plan.name FROM food_plan';
    $stmt = $con->query($sql);
    while($result = $stmt->fetch_assoc()) {
        $return[] = $result;
    }
    foreach ($return as $plan) {
        echo '<div class="crate-item">';        
        echo    '<div class="crate-text">';        
        echo        '<h3>'.$plan['name'].'</h3>';   
        $sql2 = 'SELECT dish_id, dish.name, image FROM dish, food_plan, food_plan_has_dish WHERE food_plan_plan_id = plan_id AND dish_dish_id = dish_id AND plan_id = ? ORDER BY dish_id DESC';
        $stmt2 = $con->prepare($sql2);
        $stmt2->bind_param('i', $plan['plan_id']);
        $stmt2->execute();
        $stmt2->bind_result($dish_id, $dish_name, $image_url);        
        while($stmt2->fetch()){ 
            echo '<p>'.$dish_name.'</p>';
        }
        echo    '</div>';
        echo '</div>';
    }

?>