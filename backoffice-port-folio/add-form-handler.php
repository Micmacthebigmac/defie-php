<?php
session_start();
if ($_SESSION['username']) {
if ($_POST) {
    if (
        isset($_POST['project_title']) && !empty($_POST['project_title']) &&
        isset($_POST['project_begin']) && !empty($_POST['project_begin']) &&
        isset($_POST['project_end']) && !empty($_POST['project_end']) &&
        isset($_POST['project_context']) && !empty($_POST['project_context']) &&
        isset($_POST['project_specs']) && !empty($_POST['project_specs']) &&
        isset($_POST['project_githublink']) && !empty($_POST['project_githublink']) &&
        isset($_POST['project_link']) && !empty($_POST['project_link'])
    ) {
    } 
}
    require_once("db-connect.php")
}else{
    echo 'remplissez tout les champs';
    }else{
    echo 'pour accéder à cette page du projet';
    }else{
    echo 'vus n\'êtes pas identifié';
    }
    }
    
    
    }
    ?>