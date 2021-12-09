<?php

$connect = mysqli_connect("localhost","amarilys-tenorio","Coucou13","amarilys-tenerio_moduleconnexion"); 

if (isset($_POST['env']))
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $password = $_POST['password'];
  $login = $_POST['login'];
  $conf = $_POST['conf']; 

  if (!empty($nom) && !empty($prenom) && !empty($password) && !empty($login)) {
    $sql=mysqli_query ($connect,"SELECT * FROM utilisateurs WHERE login='$login'"); 
    $res= mysqli_fetch_all($sql);
    if (count($res) == 0)
      if ($password == $conf) {
        echo 'Bienvenue! Vous pouvez des à present vous connecter.';
        $req= mysqli_query($connect,"INSERT INTO utilisateurs (login,prenom,nom,password)
        VALUES('$login','$prenom','$nom','$password')");
      } else {echo 'Les mots de passes ne corespondent pas.';}
      else {echo 'Ce compte existe deja, essaye un autre login.';}
  } else {echo 'Tout les champs doivent etre remplis.';}
}


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>INSCRIPTION</title>
</head>      
    <h1>Inscription</h1>
    <body>
      <div class="forum">
      <form name="formu" action="" method="post">
      <br>
      <input name="login" type="text" placeholder="Username."/>
      <br>
      <br>
      <input name="prenom" type="text" placeholder="Prenom." />
      <br>
      <br>
      <input name="nom" type="text" placeholder="Nom."/>
      <br>
      <br>
      <input name="password" type="password" placeholder="Ton mot de passe."/>
      <br>
      <br>
      <input name="conf" type="password" placeholder="Confime ton mot de passe." />
      <br>
      <br>
<input name="env" type="submit" placeholder="Clique ici.">
      <p class="message">Deja inscrit? Par ici :<a href="connexion.php">Connexion.</a></p>
      <p class="message">Ici un lien vers l'<a href="index.php">accueil.</a></p>
    </form>
    </body>
</html>