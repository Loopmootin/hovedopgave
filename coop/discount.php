<!DOCTYPE html>
<html>
    <head>
        <title>COOP Tilbud</title>

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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/food-wide.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Billede 1</h5>
                        <p>Her er et tilbud til dig!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/food-wide.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Billede 2</h5>
                        <p>Her er et tilbud til dig!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/food-wide.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Billede 3</h5>
                        <p>Her er et tilbud til dig!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="jumbotron intro">
            <h1>Frisk på at prøve noget nyt?</h1>
            <h4>Tilføj en af de nye retter til din madkasse og få den til halv pris!</h4>
            <p>Vi har alle vores yndlingsretter, men hos COOP går vi ind for at prøve nye ting, derfor får du lige nu halv pris på udvalgte retter, som du kan tilføje til din nuværende Måltidskasse i stedet for den ret du ønsker mindst.</p>
        </div>

        <div class="jumbotron intro tilbud">
            <h2>Frisk på at prøve noget nyt?</h2>
            <h4>Stegt flæsk med persillesovs(mums!)</h4>
            <p>Prøv vores stegte flæsk med persillesovs, en klassiker med et twist!</p>
            <img class="d-block w-100" src="img/food-wide.jpg" alt="Tilbud">
        </div>
    </div>

    <?php
        //include('php/footer.php');
    ?> 
    </body>
</html>
