<?php
session_start();
if($_SESSION['username']){
    if($_POST){
        if(isset($_POST['project_title'])&&!empty($_POST['project_title'])&&
        isset($_POST['project_begin'])&&!empty($_POST['project_begin'])&&
        isset($_POST['project_end'])&&!empty($_POST['project_end'])&&
        isset($_POST['project_context'])&&!empty($_POST['project_context'])&&
        isset($_POST['project_specs'])&&!empty($_POST['project_specs'])&&
        isset($_POST['project_githublink'])&&!empty($_POST['project_githublink'])&&
        isset($_POST['project_link'])&&!empty($_POST['project_link'])
/*         isset($_POST['project_image'])&&!empty($_POST['project_image']) */
    ){
    
    require_once("db-connect.php");
    $title =strip_tags($_POST['project_title']);
    $begin =strip_tags($_POST['project_begin']);
    $end =strip_tags($_POST['project_end']);
    $context =strip_tags($_POST['project_context']);
    $specs =strip_tags($_POST['project_specs']);
    $githublink =strip_tags($_POST['project_githublink']);
    $projetlink =strip_tags($_POST['project_link']);
  /*   $projetimg =strip_tags($_POST['project_image']); */

            if(isset($_FILES['project_image'])&&!empty($_FILES['project_image'])){
                $nomOrigine = $_FILES['project_image']['name'];
                $elementsChemin = pathinfo($nomOrigine);
                var_dump( $elementsChemin);
            
        

        $sql ="INSERT INTO projects (projects_title,project_begin,project_end,project_context,project_specs, project_githublink,project_link) VALUES(:projects_title,:project_begin,:project_end,:project_context,:project_specs,:project_githublink,:project_link)";
        $query = $db ->prepare($sql);
        $query->bindValue(':projects_title', $title, PDO::PARAM_STR);
        $query->bindValue(':project_begin', $begin, PDO::PARAM_STR);
        $query->bindValue(':project_end', $end, PDO::PARAM_STR);
        $query->bindValue(':project_context', $context, PDO::PARAM_STR);
        $query->bindValue(':project_specs', $specs, PDO::PARAM_STR);
        $query->bindValue(':project_githublink', $githublink, PDO::PARAM_STR);
        $query->bindValue(':project_link', $projetlink, PDO::PARAM_STR);
        /* $query->bindValue(':projets_image', $projetimg, PDO::PARAM_STR); */
        $query->execute();
        echo 'Sucess';
        echo'<br><a href=home.php> Retour </a>';
    }else{
        echo 'Le fichier n\'a pas été importé';
    }

}else{
    echo 'Remplissez tous les champs';echo '<br><a href=add-form.php> Retour </a>';} 
} else {
    echo 'Pour acceder à cette page vous devez publier un projet';}
   } else {
    echo 'Vous n\'êtes pas identifiez';
   }

?>