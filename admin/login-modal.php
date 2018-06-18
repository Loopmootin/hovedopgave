<?php 
    session_start();
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
        <div class="create-user">
          <form id="create-user" class="create-user-form" action="" method="post">
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

        <h2>Login:</h2>
        <div class="login-user">
          <form id="login-user" class="login-user-form" action="" method="post">
            
            <div class="item">
                <label>Din e-mail</label><br />
                <input id="login-user-mail" type="text" required><br />
            </div>
            <div class="item">
                <label>Dit password</label><br />
                <input id="login-user-password" type="password" required><br />
            </div>
            
            <input id="login-user-submit" type="submit" value="Login" name="create" />
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>