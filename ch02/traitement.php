<?php
if (! empty($_GET['nom'])) {
        
    $nom = $_GET['nom'];
        
} else {
    
    // Si on arrive ici, c'est que $_GET['nom'] n'est pas défini
    // Ce qui veut dire qu'on vient peut-être de post.html  
    if(! empty($_POST['nom'])) {

        $nom = $_POST['nom'];
  
    } else {
        $nom = 'Non défini, vous devezu utiliser get.html ou post.html';
    }
}

        
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Le fichier traitement </title>
        <meta charset="utf-8">
    </head>
    <body>
        
        
        <?php
            echo $nom;
        ?>
    </body> 
</html>
