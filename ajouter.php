<?php
session_start();
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
            <form method="POST" action="imprimer.php">
                <fieldset>
                    <legend>informations personnelles</legend>
                     <label>Nom et Prenom de l'Employée:</label>
                        <input type="text" name="nomemployee">
                    <label>Sexe</label>
                        <input type="radio" name="sexe" >F
                        <input type="radio" name="sexe" >M
                     <label>Date de naissance</label>
                        <input type="type" name="date" required>
                      <label>Situation familiale</label>
                        <input type="text" name="sitfamilile" required>
                      <label>Collège</label>
                          <select name="college" style="visibility:visible;">
                              <option >Execution</option>
                              <option >Maitrise</option>
                              <option >Cadre</option>
                          </select>
                       <label>Emploi</label> 
                         <input type="text" name="emploi" required>
                       <label>N° CIN</label>
                          <input type="text" name="cin" required>
                       <label>Filiére</label>
                        <input type="text" name="filiere" required>
                </fieldset>
                <fieldset>
                <legend>Lettre d'affectation</legend>
                <?php
                 $bd=new PDO('mysql:host=localhost;dbname=stage','root','');
                 $result2=$bd->query('select * from service');
              ?>
               <label>Service</label>
                <select name="service">
                <?php
                while($reponse2=$result2->fetch())
                {
                  echo "<option>" . $reponse2['type'] . "</option>";
                }
              
                 $result1=$bd->query('select * from division');
              ?>
              </select>
                <label>Division</label>
                <select name="division">
                <?php
                while($reponse1=$result1->fetch())
                {
                  echo "<option>" . $reponse1['divisio'] . "</option>";
                }
                 $result3=$bd->query('select * from centre');
              ?>
               </select>
                <label>Centre</label>
                <select name="centre">
                <?php
                while($reponse3=$result3->fetch())
                {
                  echo "<option>" . $reponse3['station'] . "</option>";
                }
                 ?>
                </select>

                <label>Date presenté dans le service</label>
                <input type="date" name="date1">
                <label>Num de lettre</label>
                <input type="text" name="address1">
                <label>Date fin</label>
                <input type="date" name="datefin">
                <label>address2</label>
                <input type="text" name="address2">
                <label>Telephone</label>
                <input type="tel" name="tel">
                </fieldset>
                <input id="submit" type="submit" value="valider" style="padding:10px;font-size:100%;">
            </form>
            </div>
            <?php
       
      
        ?>
        </body>
        
</html>