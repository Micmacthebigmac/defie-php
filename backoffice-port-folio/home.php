<?php
session_start();
if ($_SESSION['username']) {
    echo $_SESSION['success'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="test.php">Hello</a>
    <h1>
    <?php
        echo 'bonjour '.$_SESSION['username']. ' ! ';
    ?>
    </h1>
   
    <a href="add-form.php"><button></button></a>

</body>
</html>