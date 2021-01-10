<?php
session_start();
$bd=new PDO('mysql:host=localhost;dbname=stage','root','');
$re=$bd->query('select * from division');
$rep=$re->fetch();
$id=$rep['id'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Directeur</title>
</head>
<body style="background-image: url(slide/5.jpg);"> 
<div style="font-size:180%;color:gray;"><a href="principale.php">Revenir</a></div>
<form method="POST" action="credirecteur.php" style="width:60%;margin-left:20%;">
  <div class="form-group">
    <label for="formGroupExampleInput" style="color:white;font-size:140%;">Nom Directeur:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="nomdirecteur"  value="<?php echo $rep['nom_directeur']; ?>" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" style="color:white;font-size:140%;">Role</label>
    <input type="text" class="form-control" name="role" id="formGroupExampleInput2" value="<?php echo $rep['rolee']; ?>" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" style="color:white;font-size:140%;">Division</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="divisio"  value="<?php echo $rep['divisio']; ?>"   required  >
  </div>
  <input type="submit" value="valider">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{$divisio=$_POST['divisio'];
    $nomdirecteur=$_POST['nomdirecteur'];
    $role=$_POST['role'];
    $bd=new PDO('mysql:host=localhost;dbname=stage','root','');//connecter a la BD
            $result=$bd->query('UPDATE division SET divisio="'.$divisio.'",nom_directeur="'.$nomdirecteur.'",rolee="'.$role.'" where id="'.$id.'" ');//la requete demandee
            $reponse=$result->fetch();
            echo "bien modifiée";
            $_SESSION['nomdirecteur']=$_POST['nomdirecteur'];
            $_SESSION['divisio']=$_POST['divisio'];
            $_SESSION['role']=$_POST['role'];

}
?>
</body>
</html>