<?php 

if (
    isset($_POST['post_username'])&&!empty($_POST['post_username'])
    &&isset($_POST['post_email'])&&!empty($_POST['post_email'])
    &&isset($_POST['post_password'])&&!empty($_POST['post_password'])
    &&isset($_POST['post_confirmation'])&&!empty($_POST['post_confirmation'])
) {

    if ($_POST['post_password']==$_POST['post_confirmation']) {
        require_once('db-connect.php');

    $username= strip_tags($_POST['post_username']);
    $email= strip_tags($_POST['post_email']);
    $password_strip= strip_tags($_POST['post_password']);
    $password=password_hash($password_strip, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
  // use exec() because no results are returned
  $query=$db->prepare($sql);
  $query->bindValue(':username', $username, PDO::PARAM_STR);
  $query->bindValue(':email', $email, PDO::PARAM_STR);
  $query->bindValue(':password', $password, PDO::PARAM_STR);
  $query->execute();
  echo "New record created successfully";

    } else {
        echo 'NON mauvais mdp';
    }
} else {
    echo 'Tous les champs ne sont pas remplis';
}

/* echo $_POST['post_username'];
echo '<br>';
echo $_POST['post_email'];
echo '<br>';
echo password_hash($_POST['post_password'], PASSWORD_DEFAULT);
echo '<br>';
echo password_hash($_POST['post_confirmation'], PASSWORD_DEFAULT);
echo '<br>';
echo '<a href="register-form.php"><button>Retour</button></a>'; */