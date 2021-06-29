<?php 

if (
    isset($_POST['post_username'])&&!empty($_POST['post_username'])
    &&isset($_POST['post_password'])&&!empty($_POST['post_password'])
) {


        require_once('db-connect.php');



    $sql = "SELECT* FROM users WHERE username = :username";
  // use exec() because no results are returned
  $query=$db->prepare($sql);
  $query->execute(array('username'=>$_POST['post_username']));
  $result=$query->fetch();

  if ($result) {
      $checkingPassword=password_verify($_POST['post_password'], $result['password']);
      echo 'ok';
      if($checkingPassword) {
         // echo $result['username'];
         session_start();
        $_SESSION['username'] = $result['username'];
        $_SESSION['success'] = ' : connextion reussie';
        header('Location: home.php');
      }

  }

} else {
    echo 'tous les champs ne sont pas remplis';
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