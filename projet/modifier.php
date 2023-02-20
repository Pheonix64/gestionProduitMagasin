<?php
// appel du fichier de connexion à la bd
require_once('connexion_db.php');
//l'identifiant du produit à modifier
$id = $_GET['modifierid'];
//requête pour lire les attributs du produit à modifier
$sql = "select * from produits where id_produit=$id";
// exécution de la requête
$resultat = mysqli_query($conn,$sql);
if($resultat){
    $row = mysqli_fetch_assoc($resultat);
}else{
    die(mysqli_error($conn));
}

$nom_produit_value = $row['nom'];
$prix_produit_value = $row['prix'];
$qte_produit_value = $row['quantite_en_stock'];
$desc_produit_value = $row['description'];
$img_produit_value = $row['image'];

if(isset($_POST['nom_produit']) && isset($_POST['prix_produit']) && isset($_POST['qte_produit'])
    && isset($_POST['desc_produit']) && isset($_POST['img_produit'])){
    //pour faire la mise à jour
    $nom_produit = $_POST['nom_produit'];
    $prix_produit = $_POST['prix_produit'];
    $qte_produit = $_POST['qte_produit'];
    $desc_produit = $_POST['desc_produit'];
    $img_produit = $_POST['img_produit'];
    //inserer un nouveau produit
    $modif = "update produit set id_produit=$id,nom='$nom_produit',prix=$prix_produit,
    quantite_en_stock=$qte_produit,description='$desc_produit',image='$img_produit' where id_produit=$id";
    //exécution de la requête
    $inserted = mysqli_query($conn,$modif);
    if($inserted){
        header('location:liste_produits.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page d'ajout de produits </title>
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
    <form method = "POST" class="shadow-lg p-3 mb-5 bg-white rounded form_element" >
            <div class="form-group"> 
                <label for="nom_produit"> Nom : </label>
                <input class="form-control" type="text" name="nom_produit" id="nom_produit" value=<?php echo $nom_produit_value; ?>>
            </div>
            <div class="form-group"> 
                <label for="prix_produit"> Prix : </label>
                <input class="form-control" type="number" id="prix_produit" name="prix_produit" value=<?php echo $prix_produit_value; ?>>
            </div>
            <div class="form-group"> 
                <label for="qte_produit"> Quantité en stock : </label>
                <input class="form-control" type="number" id="qte_produit" name="qte_produit" value=<?php echo $qte_produit_value; ?>>
            </div>
            <div class="form-group"> 
                <label for="img_produit"> Image du produit : </label>
                <input class="form-control" type="text" name="img_produit" id="img_produit" value="<?php echo $img_produit_value; ?>">
            </div>
            <div class="form-group"> 
                <label for="desc_produit"> Description : </label> <br>
                <textarea class="form-control" name="desc_produit" id="desc_produit"  rows="3" value=<?php echo $desc_produit_value; ?>></textarea>
            </div>
            <div class="form-group">
                <button id="bouton" type="submit" class="btn btn-secondary btn-lg" name="bValider">Modifier</button>
            </div>
            
    </form>
</body>
</html>