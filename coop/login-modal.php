<?php 
    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('php/db_con.php');
   

    if(isset($_POST['create'])) {

        $loginUserMail = filter_input(INPUT_POST, 'login-user-mail')
            or die('Missing/illegal mail parameter!!!<br>');
        $loginUserPassword = filter_input(INPUT_POST, 'login-user-password')
            or die('Missing/illegal password parameter!!!<br>');


        $sql = 'SELECT profile_id, name, password FROM profile WHERE email = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('s', $loginUserMail);
        $stmt->execute();
        $stmt->bind_result($pid, $name, $pwhash);
        
        while($stmt->fetch()) {

        }

        if(password_verify($loginUserPassword, $pwhash)) {
            //echo '<h3>Hej '.$name.'</h3>';
            $_SESSION['pid'] = $pid;
            $_SESSION['name'] = $name;
        } else {
            echo '<h3>Login fejlede prøv igen!</h3>';
        }


    }


?>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="login-user">
          <form id="login-user" class="login-user-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <div class="item">
                <label>Din e-mail</label><br />
                <input name="login-user-mail" type="text" required><br />
            </div>
            <div class="item">
                <label>Dit password</label><br />
                <input name="login-user-password" type="password" required><br />
            </div>
            
            <input id="login-user-submit" type="submit" value="Login" name="create" />
          </form>
        </div>
      </div>

        
        <div class="create-user">
          <form id="create-user" class="create-user-form" action="" method="post">
            <h5>Opret:</h5>
            <div class="item">
                <label>Dit navn</label><br />
                <input id="user-name" type="text" required><br />
            </div>
            <div class="item">
                <label>Din e-mail</label><br />
                <input id="user-mail" type="text" required><br />
            </div>
            <div class="item">
                <label>Dit password</label><br />
                <input id="user-password" type="password" required><br />
            </div>
            <div class="item">
                <label>Din adresse</label><br />
                <input id="user-address" type="text" required><br />
            </div>
            
            <input id="user-submit" type="submit" value="Opret" name="create" />
          </form>
        </div>

        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>