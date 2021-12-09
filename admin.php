<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
        <title>ADMIN</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylee.css">

    </head>
    <header> 
    </header>
    <body>
        <?php
        session_start();
        if(isset($_SESSION['admin'])){
        ?>

        <?php
        # $bdd = mysqli_connect("localhost","amarilys-tenorio","Coucou13","amarilys-tenerio_moduleconnexion"); 
        $bdd = mysqli_connect("localhost","amarilys-tenorio","Coucou13","amarilys-tenerio_moduleconnexion");

        $req= mysqli_query($bdd,"SELECT * FROM utilisateurs");  

        $res= mysqli_fetch_all($req, MYSQLI_ASSOC);  

?>
        <div class="liste">
        <h1>Liste des comptes</h1>
        <a href="index.php">Accueil</a>
        <a href="deconnexion.php">Deconnexion</a>
        <br><br>
    </li>
        <table>
            <thead>

                    <?php
                    echo '<tr>';                        
                    foreach($res[0] as $key => $value){        

                            echo "<th>$key</th>";          

                    }
                    echo '</tr>';
                    ?>
            </thead>
<?php
                foreach($res as $key => $value){ 

                    echo '<tr>';

                    foreach ($value as $key1 => $value1) 
                    {
                        echo "<td>$value1</td>";  
                    }

                        echo '</tr>'; 
                }
?>
        </table>
        <br>
            </div>
    </body>
    <?php
        }
        else echo 'Tu ne possède pas les droits admin.';
    ?>
</html>