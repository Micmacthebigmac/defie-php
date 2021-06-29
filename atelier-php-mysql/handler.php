<?php
require_once('db-connect.php');
if (isset($_POST['nobject']) && !empty($_POST['nobject']) && isset($_POST['nauthor']) && !empty($_POST['nauthor']) && isset($_POST['comment']) && !empty($_POST['comment'])) {
    $object = strip_tags($_POST['nobject']);
    $author = strip_tags($_POST['nauthor']);
    $comment = strip_tags($_POST['comment']);


        $sql = "INSERT INTO blog(nobject,nauthor,comment)VALUES(:nobject,:nauthor,:comment)";
        $query = $db->prepare($sql);
        $query->bindValue(':nobject', $object, PDO::PARAM_STR);
        $query->bindValue(':nauthor', $author, PDO::PARAM_STR);
        $query->bindValue(':comment', $comment, PDO::PARAM_STR);
        $query->execute();
        echo 'c\'est ok';
        echo ' <br><a href="form.php"> retour</a>';
    
} else {
    echo 'remplissez tous les champs du formulaire';
}