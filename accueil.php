<?php
include 'header.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <style>
        

        /* Styles pour le conteneur principal */
        body {
            margin: 0;
            padding: 0;
        }
        
        .container {
         
            margin: 60px auto;
            padding: 60px;
            background-color: #fff;
            border-radius: 8px;
          
        }

        /* Styles pour le logo */
        .container img {
            display: block;
            margin: 0 auto 20px;
        }

        /* Styles pour les paragraphes de texte */
        .container p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        /* Styles pour le lien de retour en haut */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-to-top:hover {
            background-color: #0056b3;
        }
   center img {
    width: 500px; /* Largeur souhaitée */
    height: auto; /* Hauteur automatique pour maintenir le ratio d'aspect */
}

    </style>
</head>

<body>
    <div class="container">
        <h1>Bienvenue sur notre plateforme de quizz interactive !</h1>
        <center><img src="./assets/logo.png" alt="" height="120"></center>
        <p>
            Que ce soit pour évaluer les connaissances de vos élèves, former vos collaborateurs ou simplement organiser un moment ludique, notre site de quizz est là pour répondre à vos besoins.

            Grâce à notre interface conviviale et intuitive, vous pouvez créer, personnaliser et partager des quizz sur une multitude de sujets en quelques clics seulement. Que ce soit pour tester les compétences académiques de vos élèves, renforcer la cohésion d'équipe au sein de votre entreprise ou simplement divertir vos collègues lors d'un événement, notre plateforme offre une solution flexible et adaptable à vos besoins spécifiques.

            Avec une variété de formats de questions, des options de personnalisation avancées et la possibilité de suivre les résultats en temps réel, vous disposez de tous les outils nécessaires pour créer des expériences d'apprentissage engageantes et interactives.

            Rejoignez-nous dès aujourd'hui et découvrez comment notre plateforme de quizz peut enrichir votre enseignement ou vos activités de formation en offrant une expérience d'apprentissage dynamique et captivante pour tous les participants.
        </p>
      
    </div>
    <footer>
        <p>&copy; 2024 Quiz Company. Tous droits réservés.</p>
    </footer>
</body>

</html>
