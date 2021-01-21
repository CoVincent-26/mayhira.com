<?php

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=gold_mayhira;charset=utf8', 'root', 'bebechien', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $goldenbook = $bdd->query('SELECT gold_name, gold_msg, DATE_FORMAT(gold_timestamp, "%d/%m/%Y %H:%i:%s") AS heure FROM gold_mayhira ORDER BY gold_id DESC LIMIT 3');

    while ($donnees = $goldenbook->fetch()) {
        ?>
        <p style=" width: 100%; margin: none; font: arial;">
            Posté par : <?php echo htmlspecialchars($donnees['gold_name']); ?> le 
            <?php 
                echo " ";
                echo ($donnees['heure']); 
                echo " ";
            ?>
            <br>
            <?php echo htmlspecialchars($donnees['gold_msg']); ?>
            <br>
            <br>
        </p>
        <?php
    }

    $goldenbook->closeCursor();

    if (empty($_POST['gold_name']) OR empty($_POST['gold_msg'])) {
        // header('Location: accueil.php');
        echo('non');
    } else if ( !is_string($_POST['gold_name']) OR !is_string($_POST['gold_msg'])) {
        // header('Location: accueil.php');
        echo('non');

    } else {
        $req = $bdd->prepare('INSERT INTO gold_mayhira(gold_name, gold_msg, gold_timestamp) VALUES(?, ?, NOW())');
        $req->execute(array(
            $_POST['gold_name'],
            $_POST['gold_msg'],
        ));
        $req->closeCursor();
        header('Location: accueil.php');
    }

?>    


<form method="post" action="accueil.php" style="width: 100%">

    <!-- <input type="hidden" name="memo" value="Arty" /> -->

    Votre nom :
    <input type="text" name="gold_name">

    <br>

    Votre message:<br>
    <textarea name="gold_msg" rows="4" cols="15">
    </textarea>

    <br>

    <input type="submit" value="Envoyer">

</form>



