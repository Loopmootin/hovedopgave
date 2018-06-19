<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>COOP Admin Page</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="sass.vscode/style.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        

    </head>
    <body>

    <?php
        require_once('php/db_con.php');  
        include('login-modal.php');      
        include('php/header.php');

        if(empty($_SESSION['pid'])) {
                echo '<h2 class="login-message">Du skal være logget ind for at kunne oprette Måltidskasser</h2>';
        } else {
            if ($_SESSION['pid'] !== 2) {
                echo '<h2 class="login-message">Du har ikke administrativ adgang</h2>';
            } else {
    ?>

    <div class="container">
        <div class="container-item">
            <div class="container-form">
                <div class="exp-bar">
                    <img class="plus-icon" src="img/plus-icon-2.png" alt="plus icon">
                    <h2>Opret en fødevarer</h2>
                </div>
                
                <div class="create-food">
                    <form id="upload-product" action="" method="post">
                        <h3>Opret en fødevarer:</h3><br />
                        <div class="item">
                            <label>Navn</label><br />
                            <input id="product-name" type="text" name="product-name" required><br />
                        </div>
                        <div class="item">
                            <label>Pris</label><br />
                            <input id="product-price" type="number" name="product-price" required><br />
                        </div>
                        <div class="item">
                            <label>Vægt i gram</label><br />
                            <input id="product-weight" type="number" name="product-weight" required><br />
                        </div>
                        <input id="product-submit" type="submit" name="product-submit" value="Upload">
                        <p class="product-message"></p><br />
                    </form>
                </div>
            </div>
        </div>

        <div class="container-item">
            <div class="container-form">
                <div class="exp-bar">
                    <img class="plus-icon" src="img/plus-icon-2.png" alt="plus icon">
                    <h2>Lav en ret</h2>
                </div>
                <div class="create-dish">
                    <form id="upload-dish" class="upload-dish" action="" method="post" enctype="multipart/form-data">
                        <div class="item">
                            <label>Rettens navn</label><br />
                            <input id="dish-name" type="text" required><br />
                        </div>
                        <label>Vælg produkter:</label><br />
                        <div class="item">
                            <label>Søg produkter..</label><br />
                            <input id="search-food-items" type="text">
                            <table>
                                <tbody id="food-item-table">
                                    <?php
                                        include('php/show_food_items.php');
                                    ?> 
                                </tbody>
                            </table>
                        </div>
                        <div class="item">
                            <label for="file" class="custom-file">Upload Billede</label><br />
                            <input type="file" name="file" id="file" required /><br />
                            <span id="file-selected"></span><br />
                            <span id="message"></span><br />
                        </div>
                        <input id="dish-submit" type="submit" value="Upload" name="create" />
                    </form>
                </div>
            </div>
        </div>

        <div class="container-item">
            <div class="container-form">
                <div class="exp-bar">
                    <img class="plus-icon" src="img/plus-icon-2.png" alt="plus icon">
                    <h2>Lav en Madplan</h2>
                </div>
                <div class="create-foodplan">
                    <form id="make-foodplan" action="" method="post">
                        <div class="item">
                            <label>Madplanens navn:</label><br />
                            <input id="foodplan-name" type="text" required><br />
                        </div>
                        
                        <label>Vælg retter:</label><br />
                        <div class="item">
                            <label>Søg ret..</label><br />
                            <input id="search-food" type="text">
                            <table>
                                <tbody id="food-table">
                                    <?php
                                        include('php/show_dishes.php');
                                    ?> 
                                </tbody>
                            </table>
                        </div>
                        <input id="foodplan-submit" type="submit" name="Create" value="submit">
                    </form>
                </div>
            </div>
        </div>

        <div class="container-item">
            <div class="container-form">
                <div class="exp-bar">
                    <img class="plus-icon" src="img/plus-icon-2.png" alt="plus icon">
                    <h2>Slet en madplan</h2>
                </div>
                <div class="create-foodplan">
                    <form id="delete-foodplan" action="" method="post">
                        <label>Vælg madplan:</label><br />
                        <div class="item">
                            <label>Søg madplan..</label><br />
                            <input id="search-foodplan" type="text">
                            <table>
                                <tbody id="foodplan-table">
                                    <?php
                                        include('php/show_foodplans.php');
                                    ?> 
                                </tbody>
                            </table>
                        </div>
                        <input id="foodplan-show-submit" type="submit" name="delete" value="Slet">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        }
    }
        //include('php/footer.php');
    ?> 
    <script src="js/main.js"></script>
    </body>
</html>