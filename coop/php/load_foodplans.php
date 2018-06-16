<?php 
    session_start();
    
    $dish_array = array();

    $sql = 'SELECT plan_id, name FROM food_plan';
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($pid, $foodplan_name);
  
    while($stmt->fetch()){
        echo '<p>'.$pid.$foodplan_name.'</p>';
        array_push($dish_array, $pid);
    }

    $_SESSION["dish_array"] = $dish_array;
?>