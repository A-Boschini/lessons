<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
<?php
    $dayofweek = date("w");

    switch ($dayofweek) {
        case 1:
            echo "<p>It is Sunday</p>";
            break;
        case 2:
                echo "<p>It is Monday</p>";
                break;
        case 3:
                echo "<p>It is Tuesday</p>";
                break;
        case 4:
                echo "<p>It is Wednesday</p>";
                break;
        case 5:
                echo "<p>It is Thursday</p>";
        case 6:
                echo "<p>It is Friday</p>";
                break;
        case 0:
                echo "<p>It is Saturday</p>";
        default:
            break;
    }


 ?>
    </body>
</html>
