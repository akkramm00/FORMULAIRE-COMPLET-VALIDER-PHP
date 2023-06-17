  <form method="POST" action="traitement.php">
    <label for="sexe">Genre:</label><br>
    <input type="radio" id="sexe" name="genre" value="homme">Homme
    <input type="radio" id="sexe" name="genre" value="femme">Femme<br><br>

    <label for="pseudo">Pseudo:</label><br>
    <input type="text" id="password" name="pseudo" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Mot de passe:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="street">N° de voie:</label><br>
    <input type="number" id="street" name="street"><br><br>

    <label for="address">Adresse:</label><br>
    <input type="text" id="address" name="address" required><br><br>
    
    <label for="city">Ville:</label><br>
    <input type="text" id="city" name="city" required><br><br>

    <label for="description">Description:</label><br>
    <textarea name="description" id="description" required></textarea><br><br>

    <label for="services">Nos services:</label><br>
    <select id="services" name="services" required>
      <option value="service">Séléctionner un service ...</option>
      <option value="service1">Mécanique</option>
      <option value="service2">Carosserie</option>
      <option value="service3">Vidange et filtres</option>
      <option value="service4">Climatisation</option>
    </select><br><br>

    <input type="submit" value="Valider">
  </form>