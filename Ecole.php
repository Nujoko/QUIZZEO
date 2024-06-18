<?php
include 'header.php';
?>

<?php

if (!isset( $_SESSION['ecole_identifiant'])) {
    // Redirigez vers la page de connexion pour l'administrateur si la session pour un administrateur n'est pas définie
    header("Location: connexion.php");
    exit();
}



?>
<br>

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
       
}body{
    background-image: url(https://i.notretemps.com/1400x787/smart/2023/10/16/quiz-annees-2000.jpeg);
    background-attachment: fixed ;
    background-size: cover;
    color: black;
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
   
   
 
}
a{
  color: azure;
}
 

 
h1, h2, h3 {
    color: #599eb5;
}
 
a {
    color: #ffffff;
    text-decoration: none;
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
<h1>QUIZZEO</h1>


    <h1>Bienvenue, <?php echo $identifiant; ?>!</h1> 

    

    <h3>Choisir un Quiz</h3>
    
    <?php

$quizzesDirectory = "quizzes";

$quizFiles = glob($quizzesDirectory . "*.csv");


foreach ($quizFiles as $quizFile) {
    
    $quizData = array_map('str_getcsv', file($quizFile));
    
    $quizName = $quizData[1][0]; 
    $creator = $identifiant;
    $quizId = pathinfo($quizFile, PATHINFO_FILENAME); 

    // Créer un lien vers play_quiz.php avec des paramètres pour identifier quel quiz est choisi
    echo "<a href='play_quiz.php?quiz_name=$quizId'>$quizName (Créé par: $creator)</a><br>";
   
}
$_SESSION["quiz_name"] = $quizName ;
?>


<h3>Création de quiz </h3>


<ul><li><a href="quiz_creation_form.php">QUIZ</a></li></ul>

    <footer>
        <p>&copy; 2024 Quiz Company. Tous droits réservés.</p>
    </footer>
</body>
</html>

