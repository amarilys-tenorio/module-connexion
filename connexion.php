<?php
$connect = mysqli_connect("localhost","amarilys-tenorio","Coucou13","amarilys-tenerio_moduleconnexion"); 

if(isset($_POST['login']) && isset($_POST['password'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    $sql=mysqli_query ($connect,"SELECT * FROM utilisateurs WHERE login='$login' AND password='$password'");
    $res= mysqli_fetch_all($sql); 
}
    if (empty($res)) {
    }
     else {
         if($res[0][4] == $password){
            session_start();
            if ( $password == 'admin' && $login == 'admin'){
                $_SESSION['admin']=1;
                echo 'Connecté en tant que ADMIN';
                header ("refresh:4;url=admin.php");
    
            }else {
                echo $res[0][2] .' est connecté, en attente de redirection...';
                $_SESSION["id"] = $res[0][0];
                header ("refresh:4;url=profil.php");

            }
            }
             else {
             echo "Pas bon.";
         }
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
    <title>CONNEXION</title>
</head>
<body>

<div class="forum">
    <h1>Connexion</h1>
<form method="post" action="">
    <br>
    <input name="login" type="text" placeholder=".Login"required />
    <br>
    <br>
    <input name="password" type="password" placeholder="Mot de passe" requried />
    <br>
    <br>
    <input type=submit value="Envoyer" name="env">
    <p class="message"> Pas de compte? Par ici!<a href="inscription.php">Inscription</a></p>
    <p class="message"> Ici un lien vers l'<a href="index.php">accueil.</a></p>

</div>
</form>
</body>
</html>