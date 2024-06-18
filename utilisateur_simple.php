<?php
include 'header.php';
?>
?>
<?php
if (!isset(  $_SESSION['utilisateur_simple_identifiant'])) {
    // Redirigez vers la page de connexion pour l'administrateur si la session pour un administrateur n'est pas définie
    header("Location: connexion.php");
    exit();
}

// Le reste du contenu de la page pour l'administrateur
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
       
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<footer>
        <p>&copy; 2024 Quiz Company. Tous droits réservés.</p>
    </footer>
</body>
</html>
