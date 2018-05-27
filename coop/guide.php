<!DOCTYPE html>
<html>
    <head>
        <title>COOP Video Guides</title>

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
        require_once('php/db_con.php');
        include('php/header.php');
    ?>

    <div class="container">
        <div class="jumbotron intro">
            <h2>Få hjælp til madlavningen</h2>
            <p>Har du problemer med at lave nogle af retterne, så kan du få alt den hjælp du måtte have brug for.</p>
            <p>Se eventuelt her hvordan vores professionelle kokke laver lige præcis dine retter.</p>
        </div>  

        <div class="video-tiles">
            <div class="video-item">
                <h4>Se hvordan vores professionelle kokke laver verdens bedste cookies</h4>
                <iframe src="https://www.youtube.com/embed/rEdl2Uetpvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="video-item">
                <h4>Lav Mac'n'Cheese så du aldrig vil købe det ude igen</h4>
                <iframe src="https://www.youtube.com/embed/URdX9rFIbcc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="video-item">
                <h4>Hjemmelavet pizza? Det er slet ikke så farligt igen!</h4>
                <iframe src="https://www.youtube.com/embed/qoGI78-FSko" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="video-item">
                <h4>Kvalitetstid med børnene og kvalitetsmad i maven</h4>
                <iframe src="https://www.youtube.com/embed/_B3PvARHsrk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <?php
        include('php/footer.php');
    ?> 
    </body>
</html>
