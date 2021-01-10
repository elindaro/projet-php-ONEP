<?php
session_start();
$choix[]=$_POST['choix'];
/*echo "<pre>";
print_r($choix);
echo "</pre>";*/
foreach($choix as val)
echo val . "<br>";

?>
<!DOCTYPE html>
<html>
 <head>
     <title>
         page
     </title> 
 </head>
 <body>

 </body>
</html>