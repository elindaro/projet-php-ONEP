<?php
session_start();
?>
<!DOCTYPE html>
<html>
      <head>
      <title>
      changer mot de passe</title>
      <style>
      input
      {
          display:block;
      }
      </style>
      </head>
      <body>
     
         <form method="POST" action="motdepasse.php">
         <label>Nouveau nom:</label>
         <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" required>
         <label>Nouveau mot de passe:</label>
         <input type="text" name="password" value="<?php echo $_SESSION['password']; ?>" required>   
         <input type="submit" value="valider">             
         </form>
         <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST')
         {
            $bd=new PDO('mysql:host=localhost;dbname=stage','root','');//connecter a la BD
            $result=$bd->query('UPDATE chef SET nom = \'' . $_POST['nom'] . '\'' . ', password=\'' . $_POST['password'] . '\'' . ' WHERE nom=\'' . $_SESSION['nom'] . '\'' . ' and password=\'' . $_SESSION['password'] . '\'');//la requete demandee
            $reponse=$result->fetch();
            $_SESSION['nom']=$_POST['nom'];
            $_SESSION['password']=$_POST['password'];
         }
         ?>
      </body>
</html>