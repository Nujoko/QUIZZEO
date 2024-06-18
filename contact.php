<?php
include 'header.php';
?>
<br>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
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
    padding: 2px;
    margin-top: 20px;
    width: 100%;
}

    .container {
      width: 40%;
      margin: auto;
      padding: 15px;
      background-color: #fff;
      border-radius: 3px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      
    }
    form {
      margin-top: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],

    textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  height: 50px; 
}

    input[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #555;
    }

    textarea#message {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  height: 200px; 
}
.container {
    margin-bottom: 50px; 
}

button{
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
  background-color: #4CAF50;
}


  </style>
</head>
<body>
 

  <div class="container">
    <h2>Contactez-nous</h2>
    <form action="traitement_contact.php" method="post">
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="sujet">Sujet :</label>
        <input type="text" id="sujet" name="sujet" required>
      </div>
      <div class="form-group">
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="6" required></textarea>
      </div>
      <button type="submit">Envoyer</button>
    </form>
  </div>
  <footer>
        <p>&copy; 2024 Quiz Company. Tous droits réservés.</p>
    </footer>
</body>
</html>
