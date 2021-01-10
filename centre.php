<?
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/te.css" media="screen">
<!--===============================================================================================-->
</head>
<body style="background-image: url(slide/eau.png);">
<div style="font-size:180%;"><a href="principale.php">Revenir</a></div>
    <img src="slide/blue.jpg">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
               
                <form class="login100-form validate-form" method="POST">
                    <div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            
            <span> <h5> Vous voulez ajouter une centre ? </h5></span>
            <input type="text" name="centre" required id="userName" class="form-control input-sm chat-input" placeholder="Entrer..." />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <input type="submit" class="btn btn-primary btn-md" value="Ajouter">
            </span>
            </div> 
        
        </div>
    </div>
</div>
</div>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{   $centre=$_POST['centre'];
    $bd=new PDO('mysql:host=localhost;dbname=stage','root','');//connecter a la BD
    $result=$bd->query('insert into  centre(station) values("'.$centre.'")');
    $reponse=$result->fetch();
    echo "votre centre est bien ajouté";
}
?>

</body>
</html>