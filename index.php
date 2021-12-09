<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylee.css">
        <meta chartset="utf-8">
        <title>ACCUEIL</title>
    </head>
    <body>
        <header>
            <h1>Accueil</h1> 
<?php
            session_start();
            if(isset($_SESSION["id"])){
                echo "<a href='profil.php'>Profil</a>";
                echo "<a href='deconnexion.php'>Deconnexion</a>";
                echo "<a href='https://github.com/amarilys-tenorio/module-connexion.git'>Lien Github.</a>";
            }
            else{
                echo "<a href='connexion.php'>Connexion</a>";
                echo "<a href='inscription.php'>Inscription</a>";
                echo "<a href='https://github.com/amarilys-tenorio/module-connexion.git'>Lien Github.</a>";
            }
?>
                <br>
            </ul>
        </header>
    </body>
</html>
<style>