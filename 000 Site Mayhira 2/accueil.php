<!DOCTYPE html>
<html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <title>Accueil - Mayhira.com</title>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="CSS/standard/header.css"> 
        <link rel="stylesheet" href="navbar.css"> <!-- A eu besoin d'être mis dans le même dossier que accueil2.php (car l'mage de background ne se mettait pas, pas réussi à savoir pourquoi) -->
        <link rel="stylesheet" href="CSS/accueil2.css"> 
    </head>
    <body> <!-- Le CSS du body est dans le .css de la barre de navigation latérale (navbar.css) -->
        <header> <!-- Contenu du header (fichier header.css standardisé et séparé) -->
            <?php include("standard/header.php"); ?>
        </header>

        <?php 
            include("contenu/accueilcont.php"); 
            include("contenu/accueilscript.php"); 
        ?>


    </body>        

</html>