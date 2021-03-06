<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>COOP Måltidskasse</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="sass.vscode/style.css" />

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </head>
    <body>

    <?php
        //include('disclaimer-modal.php');
        require_once('php/db_con.php');
        include('login-modal.php');
        include('php/header.php');
        
    ?>

        <div class="container">
            <div class="jumbotron intro">
                <h1>Måltidskassen fra Coop</h1>
                <h4>Vælg mellem de smagfulde måltidskasser</h4>
                <p>Indkøb og madlavning har aldrig været nemmere eller sjovere. Med måltidskasserne fra Coop.dk MAD slipper du for at skulle finde på idéer til aftensmaden. Vi klarer det hele for dig!</p>
            </div>

            <div class="food-crates">
                <?php 
                    include('php/load_foodplans.php');
                ?>
            </div>
        </div>

    <?php
        include('php/footer.php');
    ?> 
    </body>
</html>
