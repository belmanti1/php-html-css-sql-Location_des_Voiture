<?php
require_once('Connection.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title> Document sans titre</title>
<link rel="stylesheet" href="loccar_style.css">
</head>
<body>
<div id="container">
<form name="formdelet class="formulaire">
<p><a href="acceuil.php" class="submit">Tableau de Bord</a></p>
<?php
      if(isset($_GET['supCar']))
	  {
		  $sup=$_GET['supCar'];
		  $reqDelete = "DELETE FROM automobile where IMM='$sup'";
		  $resultat=mysqli_query($cnloccar,$reqDelete);
	  }
	  if($resultat=1)
	  {
		  echo "<label style='text-align: center;color: #960486;'> La supression a éte corectement effectuée ..</label>";
	  
	        }
	      else 
	       {
		  echo " <label style='text-align: center;color: #960486;'> la suppression à échoué.. </label>";
	        }
	  
?>

</form>
</div>
</body>
</html>
