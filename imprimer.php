<?php
    session_start();
      if($_SERVER['REQUEST_METHOD'] == 'POST')
        {    $nom=$_POST['nomemployee'];
            $date_naissance=$_POST['date'];
            $situation_familiale=$_POST['sitfamilile'];
            $college=$_POST['college'];
            $Emploi=$_POST['emploi'];
            $Cin=$_POST['cin'];
            $filiere=$_POST['filiere'];
            $date_debut=$_POST['date1'];
            $date_fin=$_POST['datefin'];
            $address1=$_POST['address1'];
            $address2=$_POST['address2'];
            $tel=$_POST['tel'];
            $_SESSION['nomemployee']=$_POST['nomemployee'];
            $_SESSION['date']=$_POST['date'];
            $_SESSION['sitfamilile']=$_POST['sitfamilile'];
            $_SESSION['college']=$_POST['college'];
            $_SESSION['emploi']=$_POST['emploi'];
            $_SESSION['cin']=$_POST['cin'];
            $_SESSION['filiere']=$_POST['filiere'];
            $_SESSION['date1']=$_POST['date1'];
            $_SESSION['datefin']=$_POST['datefin'];
            $_SESSION['tel']=$_POST['tel'];
            $_SESSION['address1']=$_POST['address1'];
            $_SESSION['address2']=$_POST['address2'];
            $_SESSION['division']=$_POST['division'];
            $_SESSION['service']=$_POST['service'];
            $_SESSION['station']=$_POST['centre'];
            $bd=new PDO('mysql:host=localhost;dbname=stage','root','');//connecter a la BD
            $result=$bd->query('INSERT INTO emlpoyee( nom, date_naissance, situation_familiale, college, Emploi, Cin, filiere,date_debut,date_fin,address1,address2,tel) VALUES("'.$nom.'","'.$date_naissance.'","'.$situation_familiale.'","'.$college.'","'.$Emploi.'","'.$Cin.'","'.$filiere.'","'.$date_debut.'","'.$date_fin.'","'.$address1.'","'.$address2.'","'.$tel.'")');
            
            
        }
    if(isset($_SESSION['nom']) && isset($_SESSION['password']))
    {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>page_imprimer</title>
        <style>
            .conta
            {
                background-color:#EEE;
                margin:50px;
                margin-bottom:0;
                width:1000px;
            }
           div.container,.fin,.contenue
           {   padding:15px;
               display:flex;
               justify-content: space-between;
           }
           .partie1 p:first-child 
           {
              margin-left:70px;
           }
           .last 
           {
            margin-left:90px;
           }
           .partie2 p:first-child 
           {
               margin-left:70px;
           }
           div.partie1 
           {
               margin-left:70px;
           }
           div.partie2
           {
               margin-right:70px;
           }
           h1 
           {
               text-align:center;
               text-decoration:underline;
           }
           .parag1 
           {
              margin-left:170px;
           }
           .all 
           {
               padding:50px;
               padding-top:0;
           }
           table,th,tr 
           {
               border:1px solid #000;
               border-collapse:collapse;
           }
           th
           {
               padding:0px 10px 20px 10px;
           }
           textarea 
           {
               width:400px;
               height:100px;
           } 
           button 
           {
               margin-left:50px;
               padding:1px;
               font-size:30px;
           }
           button:hover 
           {
               background-color:pink;
               text-decoration:underline;
           }
           
        </style>
    </head>
    <body onload="window.print()">
    <div style="font-size:180%;"><a href="principale.php">Revenir</a></div>
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
     <h1>PROCES VERBAL D'INSTALLATION</h1>
     <?php
     $bd=new PDO('mysql:host=localhost;dbname=stage','root','');
     $result2=$bd->query('select * from division');
     $reponse=$result2->fetch();
     ?>
     <p class="parag1">Je soussigné Monsieur <b><?php  echo $reponse["nom_directeur"] . "  " . $reponse["rolee"];?> </b>à ALHOCEIMA.</p>
     <div class="all">
      <p >atteste que:</p>
     <div class='contenue'>
        <div class="div1"> 
           <?php
            if($_POST['sexe']=='F')
                echo "Mme,Mlle" . " :" . $_POST['nomemployee'] . "<br>";
            else 
                 echo "Mr" . " :" . $_POST['nomemployee'] . "<br>";
            ?>
         <span>Situation familiale :</span><?php echo $_POST['sitfamilile'] . "<br>"; ?>
         <span>Collège :</span> <?php echo $_POST['college'] . "    " . "Echelle : M15" . "<br>"; ?>
         <span>Emploi(*)  :</span> <?php echo $_POST['emploi'] . "<br>"; ?>
        </div>
        <div class="div2">
            <span>Mle :</span><br>
            <span>N° CIN :</span><?php echo $_POST['cin'] . "<br>"; ?>
            <br>
            <span>Filière :</span><?php echo $_POST['filiere'] . "<br>"; ?>
            <span>Post Budgétaire :</span>
         </div>
    </div>
                <p class="parag1">S'est présentée dans mon service le <?php echo $_POST['date1']; ?> pour y prendre ses fonctions</p>
                <p ><?php echo $_POST['emploi']; ?> avec l'affectation précise ci-dessous :</p>
                <table>
                    <tr><th>DIRECTION</th><th>DIVISION</th><th>SERVICE</th><th>CENTRE,<br>STATION</th></tr>
                    <tr><th>DR5</th><th><?php echo $_SESSION['division'] . "<br>"; ?></th><th><?php echo $_POST['service'] . "<br>"; ?></th><th><?php echo $_POST['centre'] . "<br>"; ?></th></tr>
                </table>
                <ul>
                    <li>Suivant <b>Lettre d'affectation N° <?php echo $_POST['address1']; ?> , DU <?php echo $_POST['datefin']; ?></b> relativeau recrutement de <b>l'intéressé.</b></li>
                    <li>Adresse personnel de l'agent :<?php echo $_POST['address2']; ?> </li>
                </ul>
                <p style="margin-left:400px;"><?php echo $_POST['tel'] . ".<br>"; ?>Fait à ALHOCEIMA, Le <?php echo $_POST['date'] . "<br>"; ?></p>
                 <p>(*) Emploi conforme à celui figurant sur </p>
                 <p>Nomelclature la nomenclature des Emplois.</p><br>
                 <div class="fin">
                     <div class="par1"> 
                              <p>Date, Signature et cacher du chef hiérarchique direct :</p>
                              <textarea></textarea>
                              <p>Prise d efonction certifiée exacte Par le <?php echo $_SESSION['nom']; ?> </p>
                              <textarea></textarea>
                    </div>
                    <div class="div2">
                    <p>Date et  Signature de l'agent :</p>
                              <textarea></textarea>
                              <p>Date, Signature et cacher du Directure Régional : </p>
                              <textarea></textarea>
                    </div>
        </div>
        </div>
    </div>
 </body>
    <?php
   
    }
    else 
    {
        header('Location:loogin.php');
    }
    ?>
</html>