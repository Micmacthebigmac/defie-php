<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
</head>
<body>
    <form action="form.php" method="post">

        <div>
            <label for="input-username">Nom d'utilisateur : </label>
            <input type="text" name="username" id="input-username" value="herve">    
        </div>
        <div>
            <label for="input-email">Email : </label>
            <input type="email" name="email" id="input-email" value="hrvrichard@gmail.com">    
        </div>
        <div>
            <label for="input-password">Mot de passe : </label>
            <input type="password" name="password" id="input-password">    
        </div>
        <div>
            <label for="input-confirmation">Confirmer le mot de passe : </label>
            <input type="password" name="confirmation" id="input-confirmation" required> <span id="error"></span>    
        </div>
        <div>
            <input type="submit" name="Submit" id="input-Submit">    
        </div>
        </form>



        <script src="main.js"></script>
</body>
</html>