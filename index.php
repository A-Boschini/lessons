<?php
    include_once 'includes/dbh.inc.php';
 ?>



<!DOCTYPE html>
<html>
<head>
        <title></title>
    </head>
    <body>

<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'] . "<br>";
        }
    }
 ?>

    </body>
</html>
