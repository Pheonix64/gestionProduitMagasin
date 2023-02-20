
<?php
    // Définition des paramètres de connexion

    // adresse du serveur : adresse IP ou le nom de la machine Hote (localhost = serveur local)
    $SERVER = 'localhost'; 
    // nom de l'utilisateur ayant droit sur la bdd, ici c'est l'administrateur général root
    $USER = 'root';
    // mot de passe de cet utilisateur
    $PASSWD = ''; 
    // nom de la base de données
    $DBNAME = 'shop_city'; // mabdd doit être crééee dans localhost

    // tentative de connexion au serveur MySQL
    $conn = mysqli_connect($SERVER, $USER, $PASSWD, $DBNAME) or 
    die('<br> Erreur de connexion au serveur de données : '.mysqli_connect_error());

?>