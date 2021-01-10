<?php
session_start();
?>
   <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
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
                .wid 

                {    
                     margin:auto;
                    width:50%;
                }
            </style>
        </head>
        <body>
        <?php
        ?>
        <div style="font-size:180%;"><a href="principale.php">Revenir</a></div>
        <div class="wid">
            <form method="POST" action="modifier.php">
                <fieldset>
                    <legend>informations personnelles</legend>
                     <label>Nom et Prenom de l'Employée:</label>
                        <input type="text" name="nomemployee" value="<?php echo $_SESSION['nomemployee']; ?>">
                     <label>Date de naissance</label>
                        <input type="type" name="date" value="<?php echo $_SESSION['date']; ?>" required>
                      <label>Situation familiale</label>
                        <input type="text" name="sitfamilile" value="<?php echo $_SESSION['sitfamilile']; ?>" required>
                      <label>Collège</label>
                          <select name="college" style="visibility:visible;" selected="<?php echo $_SESSION['college']; ?>">
                              <option >Execution</option>
                              <option >Maitrise</option>
                              <option >Cadre</option>
                          </select>
                       <label>Emploi</label> 
                         <input type="text" name="emploi" value="<?php echo $_SESSION['emploi']; ?>" required>
                       <label>N° CIN</label>
                          <input type="text" name="cin" value="<?php echo $_SESSION['cin']; ?>" required>
                       <label>Filiére</label>
                        <input type="text" name="filiere" value="<?php echo $_SESSION['filiere']; ?>" required>
                </fieldset>
                <fieldset>
                <legend>Lettre d'affectation</legend>
                <label>Date presenté dans le service</label>
                <input type="date" name="date1" value="<?php echo $_SESSION['date1']; ?>">
                <label>Num de lettre</label>
                <input type="text" name="address1" value="<?php echo $_SESSION['address1']; ?>">
                <label>Date fin</label>
                <input type="date" name="datefin" value="<?php echo $_SESSION['datefin']; ?>">
                <label>address2</label>
                <input type="text" name="address2" value="<?php echo $_SESSION['address2']; ?>">
                <label>Telephone</label>
                <input type="tel" name="tel" value="<?php echo $_SESSION['tel']; ?>">
              <!--  <label>Village</label>
                <input type="text" name="city" value="<?php echo $_SESSION['city']; ?>"> -->
                </fieldset>
                <input id="submit" type="submit" value="Modifier" style="padding:10px;font-size:100%;">
            </form>
            </div>
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $nom=$_POST['nomemployee'];
            $date_naissance=$_POST['date'];
            $situation_familiale=$_POST['sitfamilile'];
            $college=$_POST['college'];
            $Emploi=$_POST['emploi'];
            $Cin=$_POST['cin'];
            $filiere=$_POST['filiere'];
            $date_debut=$_POST['date1'];
            $address1=$_POST['address1'];
            $address2=$_POST['address2'];
            $tel=$_POST['tel'];
            $date_fin=$_POST['datefin'];
           

                $bd=new PDO('mysql:host=localhost;dbname=stage','root','');//connecter a la BD
            $result=$bd->query('update emlpoyee set nom="'.$nom.'",date_naissance="'.$date_naissance.'",situation_familiale="'.$situation_familiale.'",college="'.$college.'",Emploi="'.$Emploi.'",Cin="'.$Cin.'",filiere="'.$filiere.'",date_debut="'.$date_debut.'",date_fin="'.$date_fin.'",address1="'.$address1.'",address2="'.$address2.'",tel="'.$tel.'"  where Cin="'.$Cin.'" ');
            $reponse=$result->fetch();
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
            }
      
        ?>
        </body>
        
</html>