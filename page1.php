<?php
session_start();
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 1</title>
    <?php
    if ($_SESSION['color'] === 'red') { ?>
        <style>
            body {
                background-color: red;
            }
        </style>
    <?php
    }
    ?>
    <?php
    if ($_SESSION['color'] === 'green') { ?>
        <style>
            body {
                background-color: green;
            }
        </style>
        <?php
    }
    ?>
    <?php
    if ($_SESSION['color'] === 'blue') { ?>
        <style>
            body {
                background-color: blue;
            }
        </style>
        <?php
    }
    ?>
    <?php
    if ($_SESSION['color'] === 'yellow') { ?>
        <style>
            body {
                background-color: yellow;
            }
        </style>
        <?php
    }
    ?>
    <?php
    if ($_SESSION['color'] === 'pink') { ?>
        <style>
            body {
                background-color: pink;
            }
        </style>
        <?php
    }
    ?>
</head>
<body>

<a href="index.php">Index</a>
<a href="page2.php">Page 2</a>

</body>
</html>


