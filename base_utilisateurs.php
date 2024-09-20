<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Récupère les valeurs du formulaire
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  
  
  // Affiche les valeurs récupérées
  echo "Nom: " . $nom . "<br>";
  echo "Email: " . $email . "<br>";
  
}
?>




