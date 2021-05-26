<?php 
if(isset($_POST['submit'])){
    $mail = $_POST['first_mail'];
    $name = $_POST['user_name']; // this is the sender's Email address
    $message = $_POST['user_message'];
    $from = "h.richard@codeur.online";
    $headers = "From:" . $from;

    if (mail($mail, $name, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}
?>