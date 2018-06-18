<?php 

    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('../php/db_con.php');
   

    if(isset($_POST['loginUserSubmit'])) {

        $loginUserMail = filter_input(INPUT_POST, 'loginUserMail')
            or die('Missing/illegal mail parameter!!!<br>');
        $loginUserPassword = filter_input(INPUT_POST, 'loginUserPassword')
            or die('Missing/illegal password parameter!!!<br>');


        $sql = 'SELECT profile_id, name, password FROM profile WHERE email = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('s', $loginUserMail);
        $stmt->execute();
        $stmt->bind_result($pid, $name, $pwhash);
        
        while($stmt->fetch()) {

        }

        if(password_verify($loginUserPassword, $pwhash)) {
            echo '<h3>Hej '.$name.'</h3>';
            $_SESSION['pid'] = $pid;
            $_SESSION['name'] = $name;
        } else {
            echo '<h3>Login fejlede prøv igen!</h3>';
        }


    }

?>
