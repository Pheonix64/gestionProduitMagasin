<?php
// appel du fichier de connexion à la bd
require_once('connexion_db.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page - Liste de produits </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
            });
        });
    </script>
</head>
<body>
    <nav>
        <label class="logo" >GesProd</label>
        <ul>
            <li> <a href="admin.php"> Accueil</a></li>
            <li> <a href="ajout_produit.php"> Ajouter produit </a></li>
            <li> <a href="liste_produits.php"> liste produits </a></li>
            <li> <a href="login.php"> Se déconnecter</a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    <div class="form-group">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col"> Id </th>
                <th scope="col"> Nom </th>
                <th scope="col"> Prix </th>
                <th scope="col"> Quantité</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $id = $_GET['detailid'];
                if(isset($id)){
                    $requete = "select * from produits where id_produit=$id";
                    $resultat = mysqli_query($conn,$requete);
                    if($resultat){
                        while($rows = mysqli_fetch_assoc($resultat)){
                            $id = $rows['id_produit'];
                            $nom = $rows['nom'];
                            $prix = $rows['prix'];
                            $quantite = $rows['quantite_en_stock'];
                            $description = $rows['description'];
                            $image = $rows['image'];
                            echo '<tr>
                                <td> <img id="taille_photo_prod" src="'.$image.'" alt="photo du produit"></td>
                                <th>'.$id.'</th>
                                <td>'.$nom.'</td>
                                <td>'.$prix.'</td>
                                <td>'.$quantite.'</td>
                                <td id="justifie_desc">'.$description.'</td>
                            </tr>';
                        }
                        
                    }
                }
            ?>
        </tbody>
    </table>
    </body>
</html>