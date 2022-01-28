<?php
session_start();
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Script</title>
    <?php

    if ($_POST['select'] === 'red') { ?>
        <style>
            body {
                background-color: red;
            }
        </style> <?php
        $_SESSION['color'] = 'red';
    }

    if ($_POST['select'] === 'green') { ?>
        <style>
            body {
                background-color: green;
            }
        </style> <?php
        $_SESSION['color'] = 'green';
    }

    if ($_POST['select'] === 'blue') { ?>
        <style>
            body {
                background-color: blue;
            }
        </style> <?php
        $_SESSION['color'] = 'blue';
    }

    if ($_POST['select'] === 'yellow') { ?>
            <style>
                body {
                    background-color: yellow;
                }
            </style> <?php
        $_SESSION['color'] = 'yellow';
    }

    if ($_POST['select'] === 'pink') { ?>
            <style>
                body {
                    background-color: pink;
                }
            </style> <?php
        $_SESSION['color'] = 'pink';
    } ?>
</head>

<body>

<a href="page1.php">Page 1</a>
<a href="page2.php">Page 2</a>

</body>
</html>







