<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title> Page de l'administrateur </title>
</head>
<body>
    <nav>
        <label class="logo" >GesProd</label>
        <ul>
            <li> <a class="active" href="admin.php"> Accueil</a></li>
            <li> <a href="ajout_produit.php"> Ajouter produit </a></li>
            <li> <a href="liste_produits.php"> liste produits </a></li>
            <li> <a href="login.php"> Se déconnecter</a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    <div class="description_appl">
        <span>Gérer vos produits en toute facilité avec notre application</span>
    </div>
    <hr>
    <footer>
        <span class="footer">
            <p><a href="admin.php">Accueil</a> | <a href="ajout_produit.php">Ajouter un produit</a> | <a href="liste_produits.php">listes produits</a> | <a href="login.php">Déconnexion</a></p>
            <p class="copyright">Copyright, &copy 2022, Adresses mail:sofianeissoufou002@gmail.com,</p>
        </span>
    </footer>
</body>
</html>