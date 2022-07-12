<?php
    // connexion a la base de données ;
    $bdd ="ndtech";
    $password="";
    $users="root";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=$bdd", $users, $password , array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
        //  echo "Connexion réussie";
    } catch (PDOException $e) {
        echo "Connexion échouée :" . $e->getmessage();
    }
?>
