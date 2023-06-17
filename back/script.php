<?php
if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['pseudo']) && isset($_POST['email'])  && isset($_POST['password'])  && isset($_POST['description'])  && isset($_POST['services'])  && isset($_POST['address']) && isset($_POST['city'])  && isset($_POST['street'])) {
  $genre = $_POST["genre"];
  $pseudo = $_POST["pseudo"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $description = $_POST["description"];
  $services = $_POST["services"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $street = $_POST["street"];

  // Validation des champs (exemple simple)
  if (empty($genre) || empty($pseudo) || empty($email) || empty($password) || empty($description) || empty($services) || empty($address) || empty($city) || empty($street)) {
    echo "Veuillez remplir tous les champs.";
  } else {
    // Tous les champs sont remplis, vous pouvez effectuer d'autres opérations ici
    echo "Bienvenue , $pseudo !";
  }
    // Condition de saisie d'une adresse email valide:
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "votre adresse email est valide";
  }else{
    "Veuillez saisir ene adresse email valide" ;
  }
  //Condition de saisie d'un mot de passe :
  if(strlen($password <= 7)){
    echo "votre mot de passe doit faire minimum 7 caractères";
  }else{
    echo "Bienvuevue" . $email ;
  }
  //Condition de selection d'une recette :
  if($services === 0){
    echo "veuillez séléctionner un service ";
  }else{
    echo "choix validé";
  }
  
}
?>
