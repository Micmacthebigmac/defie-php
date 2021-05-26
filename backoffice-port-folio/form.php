<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmation = $_POST['confirmation'];


if ($password === $confirmation) {
    echo $username. '<br>' .$email. '<br>' .$password. '<br>'. $confirmation;
} else {
    echo 'les mots de passes sont pas bon !';
}