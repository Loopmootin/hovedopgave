
<?php 

    $sql = 'SELECT dish_id, name FROM dish';
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($did, $dish_name);
  
    while($stmt->fetch()){
        echo '<tr>';
        echo '<td> <input name="food-dishes" class="foodplan-checkbox" type="checkbox" value="'. $did .'">' . $dish_name . '</td>';
        echo '</tr>';
    }

?>