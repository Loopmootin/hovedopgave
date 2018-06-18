<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('../php/db_con.php');
   

    if(isset($_POST['userSubmit'])) {

        $userName = filter_input(INPUT_POST, 'userName')
            or die('Missing/illegal name parameter!!!<br>');
        $userMail = filter_input(INPUT_POST, 'userMail')
            or die('Missing/illegal mail parameter!!!<br>');
        $userPass = filter_input(INPUT_POST, 'userPass')
            or die('Missing/illegal password parameter!!!<br>');

        $userPass = password_hash($userPass, PASSWORD_DEFAULT);

        $useraddress = filter_input(INPUT_POST, 'useraddress')
            or die('Missing/illegal address parameter!!!<br>');

            $sql = 'INSERT INTO profile(email, password, name, address) VALUES(?, ?, ?, ?)';
            $stmt = $con->prepare($sql);
            $stmt->bind_param('ssss', $userMail, $userPass, $userName, $useraddress);
            $stmt->execute();
            if ($stmt->affected_rows > 0){
                echo 'Creating user was a success';
            } else {
                echo 'Could not add the user to the database';
            }


    }

?>
