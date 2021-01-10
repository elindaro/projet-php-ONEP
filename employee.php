<?php
session_start();
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
               margin-left:3%;
             display:inline;
           }
           @media screen and (max-width: 942px){
              .img1 
              {
                display:block;
              }
              .images 
              { 
                margin-left:30%;
               
              }
              a img 
              {
                width:50%;
                height:50%;
              }
              .poto2
              {
                
              }
              .poto3 
              {
                 
              }
              .poto4
              {
                
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
       <div class="img1"><a href="ajouter.php"><img src="slide/ajouter.jpg" class="poto1">Ajouter employée</a></div>
       <div class="img1"><a href="supprimer.php"><img src="slide/supprimer.jpg" class="poto2">Supprimer employée</a></div>
       <div class="img1"><a href="modifier.php"><img src="slide/modifier.jpg" class="poto3">Modifier employée</a></div>
     
       </div>
</body>

</html>

