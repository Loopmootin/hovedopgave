<?php 
    
    $plan_id_array = array();
    $plan_array = array();

    $dish_id_array = array();
    $dish_array = array();
    $image_url_array = array();
    $foodplan_id_array = array();
    $foodplan_dish_id_array = array();

    $sql = 'SELECT plan_id, name FROM food_plan';
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($pid, $foodplan_name);
  
    while($stmt->fetch()){
        echo '<p>Foodplan '.$pid.' '.$foodplan_name.'</p>';
        array_push($plan_id_array, $pid);
        array_push($plan_array, $foodplan_name);
    }

    print_r ($plan_id_array);
    echo '<br>';
    print_r ($plan_array);
    echo '<br>';

    foreach ($plan_id_array as $plan_id) {
        $sql = 'SELECT dish_id, dish.name, image, food_plan_has_dish.food_plan_plan_id, food_plan_has_dish.dish_dish_id FROM dish, food_plan, food_plan_has_dish WHERE food_plan_plan_id = plan_id AND dish_dish_id = dish_id AND plan_id = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $plan_id);
        $stmt->execute();
        $stmt->bind_result($did, $dish_name, $image_url, $foodplan_plan_id, $foodplan_dish_id);

        while($stmt->fetch()){

            array_push($dish_id_array, $did);
            array_push($dish_array, $dish_name);
            array_push($image_url_array, $image_url);
            array_push($foodplan_id_array, $foodplan_plan_id);
            array_push($foodplan_dish_id_array, $foodplan_dish_id);
        }
    }

    print_r ($dish_id_array);
    echo '<br>';
    print_r ($dish_array);
    echo '<br>';  
    //print_r ($image_url_array);
    echo '<br>'; 
    print_r ($foodplan_id_array);
    echo '<br>'; 
    print_r ($foodplan_dish_id_array);
    echo '<br>';   

    if ()
    
?>