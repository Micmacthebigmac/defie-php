<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="hahaha">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction PHP</title>
</head>
<body>

<p>hahahahaha</p>
    
<form action="home.php" method="post">

    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" value="hervé richard">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail" value="h.richard@codeur.online">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message">coucou</textarea>
    </div>

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>



</form>

<form action="http://foo.com" method="get">
    <div>
      <label for="say">Quelle salutation voulez-vous adresser ?</label>
      <input name="say" id="say" value="Salut">
    </div>
    <div>
      <label for="to">À qui voulez‑vous l'adresser ?</label>
      <input name="to" value="Maman">
    </div>
    <div>
      <button>Envoyer mes salutations</button>
    </div>
  </form>




<script src="main.js"></script>
</body>
</html>











