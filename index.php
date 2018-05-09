<!DOCTYPE html>
<html>
    <head>
        <title>COOP Admin Page</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" media="screen" href="sass.vscode/style.css" />
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </head>
    <body>

    <?php
        include('php/header.php');
    ?>

    <div class="container">
        <div class="container-item">
            <div class="container-form">
                <div class="exp-bar">
                    <img class="plus-icon" src="img/plus-icon.png" alt="plus icon">
                    <h2>Opret en fødevarer</h2>
                </div>
                
                <div class="create-food">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <h3>Opret en fødevarer:</h3><br />
                        <div class="item">
                            <label>Navn</label><br />
                            <input type="text" required><br />
                        </div>
                        <div class="item">
                            <label>Pris</label><br />
                            <input type="number" required><br />
                        </div>
                        <div class="item">
                            <label>Vægt i gram</label><br />
                            <input type="number" required><br />
                        </div>
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
                        <input type="submit" name="Create" value="submit">
                    </form>
                </div>
            </div>
        </div>

        <div class="container-item">
            <div class="container-form">
                <div class="exp-bar">
                    <img class="plus-icon" src="img/plus-icon.png" alt="plus icon">
                    <h2>Lav en ret</h2>
                </div>
                <div class="create-dish">
                    <form id="uploadimage" class="uploadimage" action="" method="post" enctype="multipart/form-data">
                        <div class="item">
                            <label>Rettens navn</label><br />
                            <input type="text" required><br />
                        </div>
                        <div class="item">
                            <label for="file" class="custom-file">Upload Billede</label><br />
                            <input type="file" name="file" id="file" required /><br />
                            <span id="file-selected"></span><br />
                            <span id="message"></span><br />
                            <input type="submit" value="Upload" name="Create" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-item">
            <div class="container-form">
                <div class="exp-bar">
                    <img class="plus-icon" src="img/plus-icon.png" alt="plus icon">
                    <h2>Lav en Madplan</h2>
                </div>
                <div class="create-foodplan">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <label>Vælg retter:</label><br />
                        <div class="item">
                            <label>Navn</label><br />
                            <input type="text" required><br />
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
    </body>
</html>
