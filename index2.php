<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title></title>
    </head>
    <body>
<?php
$data = "Admin";
//Create a template
$sql = "SELECT * FROM users WHERE user_uid=?;";
//create a prepared PDOStatement
$stmt = mysqli_stmt_init($conn);
//Prepare statement
if (!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL Statement failed";
} else {
    //bind parameters to the placeholders
    mysqli_stmt_bind_param($stmt, "s", $data);
    //run parameters inside database
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['user_uid'] . "<br>";
        }
    }

?>
    </body>
</html>
