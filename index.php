<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" media="screen" href="sass.vscode/style.css" />

        <script src="main.js"></script>
    </head>
    <body>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label>Create a food item:</label><br />
        <label>Navn:</label>
        <input type="text" placeholder="Ex Carrot" required><br />
        <label>Pris:</label>
        <input type="number" placeholder="99" required><br />
        <input type="submit" name="Create" value="submit">
    </form>
        
    </body>
</html>
