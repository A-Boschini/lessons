<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title></title>
    </head>
    <body>
<?php
//Create a template
$sql = "SELECT * FROM users WHERE user_uid=?;";
//create a prepared PDOStatement
$stmt = mysqli_stmt_init($conn);
//Prepare statement
if (!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL Statement failed";
} else {
    
}


    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['user_uid'] . "<br>";
    }


 ?>
    </body>
</html>
