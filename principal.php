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
  $reponse=$result->fetch();
 if($reponse['nom']==$user && $reponse['password']==$pass) 
  {
    $_SESSION['nom']=$_POST['nom'];
    $_SESSION['password']=$_POST['password'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>page</title>
<style>
body,html 
{
  height:100%;
  margin:0;
}
body 
{
  background-image:url('slide/beau.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 

 
}
.conta
            {
                
                margin:1%;
                margin-bottom:0;
                width:100%;
            }
            div.container,.fin,.contenue
           {   padding:1%;
               display:flex;
               justify-content: space-between;
           }
           .partie1 p:first-child 
           {
              margin-left:20%;
           }
           .last 
           {
            margin-left:40%;
           }
           .partie2 p:first-child 
           {
               margin-left:20%;
           }
           div.partie1 
           {
               margin-left:3%;
           }
           div.partie2
           {
               margin-right:5%;
           }
           a img 
           {
             width:20%;
             height:10%;
           }
           .images 
           {
             margin-top:5%;
             width:100%;
             
           }
           img 
           {
             border-radius:50%;
           }
           .img1 
           {
             display:inline;
           }
           @media screen and (max-width: 942px){
              .img1 
              {
                display:block;
              }
              .images 
              { 
                margin-left:20%;
               
              }
              a img 
              {
                width:50%;
                height:50%;
              }
           }
</style>
</head>
<body>
        <div class="conta">
     <div class="container">
        <div class="partie1">
               <p>ROYAUME DU MAROC</p>
               <p>Office National de l'Electricité et de l'eau Potable</p>
               <hr>
               <p class="last">Branche Eau</p>
        </div>
       <div class="partie2">
              <p>المملكة المغربية </p>
              <p>المكتب الوطني للكهرباء والماء الصالح للشرب</p>
              <hr>
              <p class="last">قطاع الماء </p>
       </div>
       </div>
       </div>
       <div class="images">
       <div class="img1"><a href="employee.php"><img src="slide/empl1.jpeg" class="poto1">Employée</a></div>
       <div class="img1"><a href="credirecteur.php"><img src="slide/directeur.jpg" class="poto2">Division</a></div>
       <div class="img1"><a href="creser.php"><img src="slide/service.jpg" class="poto3">Service</a></div>
       <div class="img1"><a href="centre.php"><img src="slide/division1.jpeg" class="poto4">Centre</a></div>
       </div>
</body>
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
</html>
