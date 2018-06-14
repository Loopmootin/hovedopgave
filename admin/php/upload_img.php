<?php

require_once('../php/db_con.php');

    if(isset($_FILES["file"]["type"])) {

        $name = filter_input(INPUT_POST, 'dishName')
            or die('Missing/illegal title parameter!!!');

        $foodItem = filter_input_array(INPUT_POST, 'foodItem')
            or die('Missing/illegal title parameter!!!');

        $validextensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        
        if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
        ) && ($_FILES["file"]["size"] < 10000000)//Approx. 10mb files can be uploaded.
        && in_array($file_extension, $validextensions)) {

            if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";

        } else {

            if (file_exists("../img/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";

        } else {

            $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
            $targetPath = "../img/".$_FILES['file']['name']; // Target path where file is to be stored
            move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
            echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
            
            $sql = 'INSERT INTO dish(name, image) VALUES(?, ?)';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('ss', $name, $target_file);
            $stmt->execute();
            if ($stmt->affected_rows > 0){
                echo 'Filedata added to the database :-)';
            } else {
                echo 'Could not add the file to the database ';
                echo $name;
            }

            foreach ($foodItem as $value) {
                $sql = 'INSERT INTO food_item_has_dish(food_item_food_id, dish_dish_id) VALUES(?, ?)';
                $stmt = $con->prepare($sql);
                $stmt->bind_param('ii', $foodItem, $did);
                $stmt->execute();
                if ($stmt->affected_rows > 0){
                    echo 'Filedata added to the database :-)';
                } else {
                    echo 'Could not add the file to the database ';
                    echo $name;
                }
            }

        }}} else {

        echo "<span id='invalid'>***Invalid file Size or Type***<span>";

        }
    }

?>

