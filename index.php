<!DOCTYPE html>
<html>
    <head>
        <title>COOP Admin Page</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" media="screen" href="sass.vscode/style.css" />

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </head>
    <body>

    <div class="header">
        <div class="menu-mobile menu">
            <div class="menu-item"><a href="#">Home</a></div>
            <div class="menu-item"><a href="#">Home</a></div>
        </div>
        <div class="menu-desktop menu">
            <div class="menu-item"><a href="#">Home</a></div>
            <div class="menu-item"><a href="#">Home</a></div>
        </div>
    </div>

    <div class="container">
        <div class="container-item">
            <div class="container-form">
                <img class="plus-icon" src="img/plus-icon.png" alt="plus icon">
                <h2>Opret en fødevarer</h2>
                <div class="create-food">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <label>Create a food item:</label><br />
                        <label>Navn:</label>
                        <input type="text" placeholder="Ex Carrot" required><br />
                        <label>Pris:</label>
                        <input type="number" placeholder="99" required><br />
                        <input type="submit" name="Create" value="submit">
                    </form>
                </div>
            </div>
        </div>

        <div class="container-item">
            <div class="container-form">
                <img class="plus-icon" src="img/plus-icon.png" alt="plus icon">
                <h2>Lav en ret</h2>
                <div class="create-dish">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <label>Create a food item:</label><br />
                        <label>Navn:</label>
                        <input type="text" placeholder="Ex Carrot" required><br />
                        <label>Pris:</label>
                        <input type="number" placeholder="99" required><br />
                        <input type="submit" name="Create" value="submit">
                    </form>
                </div>
            </div>
        </div>

        <div class="container-item">
            <div class="container-form">
                <img class="plus-icon" src="img/plus-icon.png" alt="plus icon">
                <h2>Lav en Madplan</h2>
                <div class="create-foodplan">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <label>Create a food item:</label><br />
                        <label>Navn:</label>
                        <input type="text" placeholder="Ex Carrot" required><br />
                        <label>Pris:</label>
                        <input type="number" placeholder="99" required><br />
                        <input type="submit" name="Create" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
        
    </body>
</html>
