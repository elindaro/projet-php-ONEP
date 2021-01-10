<?php
session_start();
if(isset($_POST['nom']) && isset($_POST['password']))
{
 try{
    $bd=new PDO('mysql:host=localhost;dbname=stage','root','');//connecter a la BD

    }
 catch(EXCEPTION $e)
   {
    die('ERROR:' . $e->getMessage());
   }
  $user=$_POST['nom'];
  $pass=$_POST['password'];
  $result=$bd->query('select * from chef');//la requete demandee
  while($reponse=$result->fetch()) 
   {if($reponse['nom']==$user && $reponse['password']==$pass)
     {
         $role=$reponse['role'];
         $prenom=$reponse['prenom'];
     }
    }
    $_SESSION['nom']=$_POST['nom'];
    $_SESSION['password']=$_POST['password'];
    if(isset($role))
    {    $_SESSION['role']=$role;
        $_SESSION['prenom']=$prenom;
   ?>
   <!DOCTYPE html>
    <html>
        <head>
            <style>
                body 
                {
                    background-color:#EFEFEF;
                    font-family:Arial,Tahoma;
                }
                fieldset 
                {
                    background-color:#FFF;
                    border:1px solid #CCC;
                    padding:10px;
                    margin-bottom:20px;
                }
                legend 
                {
                    background:#FFF;
                    border:1px solid #CCC;
                    padding:5px;

                }
                label,input[type="text"],select 
                {
                    display:block;

                }
                label 
                {
                    margin-bottom:10px;
                }
                input[type="text"],select
                { 
                    margin-bottom:10px;
                    width:300px;
                }
                #submit:hover 
                {
                    background-color:pink;
                    
                }
            </style>
        </head>
        <body>
            <form method="POST" action="imprimer.php">
                <fieldset>
                    <legend>informations personnelles</legend>
                     <label>Nom et Prenom de l'Employée:</label>
                        <input type="text" name="nomemployee">
                    <label>Sexe</label>
                        <input type="radio" name="sexe">F
                        <input type="radio" name="sexe">M
                     <label>Date de naissance</label>
                        <input type="date" name="date" required>
                      <label>Situation familiale</label>
                        <input type="text" name="sitfamilile" required>
                      <label>Collège</label>
                          <select name="college">
                              <option>Execution</option>
                              <option>Maitrise</option>
                              <option>Cadre</option>
                          </select>
                       <label>Emploi</label> 
                         <input type="text" name="emploi" required>
                       <label>N° CIN</label>
                          <input type="text" name="cin" required>
                       <label>Filiére</label>
                        <input type="text" name="filiere" required>
                        <label>Division</label>
                        <input type="text" name="division" required>
                        <label>Service</label>
                        <input type="text" name="service" required>
                        <label>Centre</label>
                        <input type="text" name="centre" required>
                </fieldset>
                <input id="submit" type="submit" value="valider" style="padding:10px;font-size:100%;">
            </form>
        </body>
    </html>
   <?php
  }
  else
  {
    echo "<p style='font-size:180%;'>please try again your name not exist:)</p>";
    echo "<a href='loogin.php' style='font-size:160%;'>réessayer</a>";
  }
}
else
 header('Location:loogin.php');

?>