

<?php
session_start();
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
<body style="background-image: url(bar.jpg);">
<form class="form-login" style="margin-left:5%" method="POST">
	<fieldset style="width: 67%">
		   <div class="form-group">
 	 <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">DIVISION :</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">AM5/5 </option>
        <option value="2">SP5/3</option>
      </select>
    </div>
 </div>
</div>
  <div class="form-group">
    <legend> Vous voulez ajouter une autre division :</legend>
    <input type="text" name="division" class="form-control" id="inputAddress">
  </div>
   <div class="wrapper">
            <span class="group-btn">     
                <input type="submit" class="btn btn-primary btn-md" value="Ajouter">
            </span>
            </div>
	</fieldset>

</form>
</body>
</html>