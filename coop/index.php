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
        include('php/header.php');
        include('login-modal.php');
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
            <h1>Måltidskassen fra Coop</h1>
            <h4>Vælg mellem fire smagfulde måltidskasser</h4>
            <p>Indkøb og madlavning har aldrig været nemmere eller sjovere. Med måltidskasserne fra Coop.dk MAD slipper du for at skulle finde på idéer til aftensmaden. Vi klarer det hele for dig!</p>
        </div>

        <div class="food-crates">

            <?php 
                //include('php/load_foodplans.php');
            ?>

            <div class="crate-item">
                <div class="crate-img left "> 
                    <img src="img/food-kids.jpg" alt="den børnevenlige billede">
                </div>
                <div class="crate-text right">
                    <h3>Den Børnevenlige</h3>
                    <h4>Prøv Måltidskassen som passer til hele familien</h4>
                    <p><strong>Mandag:</strong> Ovnstegt kylling med rodfrugter</p>
                    <p><strong>Tirsdag:</strong> Fiskefilet med kartoffelbåde</p>
                    <p><strong>Onsdag:</strong> Burgere med hjemmelavede pickles</p>
                    <p><strong>Torsdag:</strong> Hjemmelavet pizza</p>
                    <p><strong>Fredag:</strong> Frikadeller med kartoffelsalat</p>
                    <p><strong>Lørdag:</strong> Skinke og porre tærte</p>
                    <p><strong>Søndag:</strong> Spaghetti med kødsovs</p>
                </div>
            </div>

            <div class="crate-item">
                <div class="crate-text left">
                    <h3>Den Populære</h3>
                    <h4>Danmarks mest populære retter</h4>
                    <p><strong>Mandag:</strong> Frikadeller med brun sovs og kartofler</p>
                    <p><strong>Tirsdag:</strong> Tarteletter med høns og asparges</p>
                    <p><strong>Onsdag:</strong> Steak med kartoffelbåde og hjemmelavet bernaise</p>
                    <p><strong>Torsdag:</strong> Hjemmelavet pizza</p>
                    <p><strong>Fredag:</strong> Fiskefilet med kartoffelbåde</p>
                    <p><strong>Lørdag:</strong> Taco med gourcamole og salsa</p>
                    <p><strong>Søndag:</strong> Stegt flæsk med persillesovs</p>
                </div>
                <div class="crate-img right"> 
                    <img src="img/food-popular.jpg" alt="den populære billede">
                </div>
            </div>

            <div class="crate-item">
                <div class="crate-img left"> 
                    <img src="img/food-different.jpg" alt="den vovede billede">
                </div>
                <div class="crate-text right">
                    <h3>Den vovede</h3>
                    <h4>Er du nysgerrig efter at prøve noget nyt?</h4>
                    <p><strong>Mandag:</strong> Ovnstegt kylling med rodfrugter</p>
                    <p><strong>Tirsdag:</strong> Fiskefilet med kartoffelbåde</p>
                    <p><strong>Onsdag:</strong> Burgere med hjemmelavede pickles</p>
                    <p><strong>Torsdag:</strong> Hjemmelavet pizza</p>
                    <p><strong>Fredag:</strong> Jordskokkesuppe med friteret porre</p>
                    <p><strong>Lørdag:</strong> Broccolitærte med løg</p>
                    <p><strong>Søndag:</strong> Tofu og græskar bagt i krydret miso</p>
                </div>
            </div>
        </div>
    </div>

    <?php
        include('php/footer.php');
    ?> 
    </body>
</html>
