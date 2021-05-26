<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire mail</title>
</head>
<body>
    

<form action="form.php" method="post">

<div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="message_topic" value="hervé richard">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail" value="hrichard1215@gmail.com">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message">coucou</textarea>
    </div>

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>


</form>






<script src="main.js"></script>    
</body>
</html>