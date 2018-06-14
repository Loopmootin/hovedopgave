
<?php 

    $sql = 'SELECT food_id, name FROM food_item';
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($fid, $food_name);
  
    while($stmt->fetch()){
        echo '<tr>';
        echo '<td> <input name="food-items[]" class="food-item-checkbox" type="checkbox" value="'. $fid .'">' . $food_name . '</td>';
        echo '</tr>';
    }

?>