<?php

require_once('db-connect.php');
$sql = 'SELECT * FROM `blog`';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
    
<?php

foreach ($result as $blog) {
?>
    <?= $blog['nobject'] ?>
<?php
}
?>

 <a href="form.php">faire un article</a>


</body>
</html>