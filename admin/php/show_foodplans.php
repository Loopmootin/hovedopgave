
<?php 

    $sql = 'SELECT plan_id, name FROM food_plan';
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($fid, $foodplan_name);
  
    while($stmt->fetch()){
        echo '<tr>';
        echo '<td> <input name="foodplan-items" class="foodplans-checkbox" type="checkbox" value="'. $fid .'">' . $foodplan_name . '</td>';
        echo '</tr>';
    }

?>