
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form.php</title>
</head>
<body>
    

    <form action="handler.php" method="post">
    
        <label for="db-object">Sujet</label>
        <input type="text" name="nobject" id="db-object" value="hervé">

        <label for="db-author">Auteur</label>
        <input type="text" name="nauthor" id="db-author" value="hervé">

        <label for="db-text">Commentaire</label>
        <textarea name="comment" id="db-text"></textarea>

        <input type="submit" value="Envoyer">
    
    
    </form>


</body>
</html>