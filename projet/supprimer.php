<?php 
    require_once('connexion_db.php');
    if(isset($_GET['supprimerid'])){
        $id = $_GET['supprimerid'];
        $sql = "delete from produits where id_produit=$id";
        $resultat = mysqli_query($conn,$sql);
        if($resultat){
            header('location:liste_produits.php');
        }else{
            die('<br> Erreur de connexion au serveur de données : '.mysqli_connect_error());
        }
    }
?>