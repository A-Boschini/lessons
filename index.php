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
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('Gino', 'Chaves', "lineaycolor77@yahoo.com', 'Arte', 'Chirris123');";
    mysqli_query($conn, $sql);
?>

    </body>
</html>
