<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('../php/db_con.php');
   

    if(isset($_POST['foodplanShowSubmit'])) {

        $foodplans = filter_input(INPUT_POST, 'foodplans', FILTER_DEFAULT , FILTER_REQUIRE_ARRAY)
            or die('Missing/illegal food parameter!!!<br>');


        foreach ($foodplans as $foodplan) {
            $sql = 'DELETE FROM food_plan_has_dish WHERE food_plan_plan_id = ?';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('i', $foodplan);
            $stmt->execute();
            if ($stmt->affected_rows > 0){
                echo 'success';
            } else {
                echo 'Could not add the file to the database';
            }

            $sql = 'DELETE FROM food_plan WHERE plan_id = ?';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('i', $foodplan);
            $stmt->execute();
            if ($stmt->affected_rows > 0){
                echo 'success';
            } else {
                echo 'Could not add the file to the database';
            }
        }

    }

?>
