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
        include('php/header.php');
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
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <label>Vælg retter:</label><br />
                        <div class="item">
                            <label>Søg ret..</label><br />
                            <input id="search-food" type="text">
                            <table>
                                <tbody id="food-table">
                                    <?php
                                        include('php/create_foodplan.php');
                                    ?> 
                                </tbody>
                            </table>
                        </div>
                        <input type="submit" name="Create" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        //include('php/footer.php');
    ?> 
    <script src="js/main.js"></script>
    </body>
</html>


<!-- 
    <div class="item-check">
        <div class="half-block">
            <label for="cb-diary">Diary</label><br />
            <input id="cb-diary" type="checkbox"><br />

            <label for="cb-gluten">Gluten</label><br />
            <input id="cb-gluten" type="checkbox"><br />
        </div>
        
        <div class="half-block">
            <label for="cb-fruit">Fruit</label><br />
            <input id="cb-fruit" type="checkbox"><br />

            <label for="cb-vegetable">Vegetable</label><br />
            <input id="cb-vegetable" type="checkbox"><br />
        </div>
    </div>
-->