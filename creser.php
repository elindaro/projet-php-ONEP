
<?php
session_start();

   $bd=new PDO('mysql:host=localhost;dbname=stage','root','');
    $re=$bd->query('select * from service');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/ty.css" media="screen" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<body style="background-image: url(slide/5.jpg);">
<div style="font-size:180%;"><a href="principale.php">Revenir</a></div>
<form class="form-login" style="margin-left:5%" method="POST">
	<fieldset style="width: 67%">
	
  <div class="form-group">
    <legend> voulez vous ajouter une autre service ? </legend>
    <input type="text" name="service" class="form-control" id="inputAddress">
  </div>
   <div class="wrapper">
            <span class="group-btn">     
                <input type="submit" class="btn btn-primary btn-md" value="Ajouter">
            </span>
            </div>
	</fieldset>

</form>
</body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{   $type=$_POST['service'];
    $bd=new PDO('mysql:host=localhost;dbname=stage','root','');//connecter a la BD
    $result=$bd->query('insert into  service(type) values("'.$type.'")');
    $reponse=$result->fetch();
    echo "votre service est bien ajouté";
}
?>
</html>