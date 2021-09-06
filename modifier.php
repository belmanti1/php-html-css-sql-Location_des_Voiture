<?php require_once('connection.php'); ?>
<!doctype html>
<html><head>
<meta charset="UTF-8">
<title>Document sans Titre</title>
<link rel="stylesheet" href="loccar_style.css">
</head>
<body>
<div id="container">
     <form name="forUpdate" method="post" action=""  class="formulaire" enctype="multipart/form-data">
	 <h2 align="center"> Mettre a Jour une Voiture...</h2>
	 <label><b>Immatriculation : </b></label>
	 <input type="text" name="txtImm" class="zonetext" value="<?php echo $_GET['mod'] ?>" readonly>
	 <label><b>Marque : </b></label>
	 <input type="text" class="zonetext" name="txtMarque" placeholder="Entrer La Marque ici ..." required>
	 <label><b>Prix de Location :</b></label>
	 <input type="number" class="zonetext" name="txtPl" placeholder="Entrer La prix unitaire ici ..." required>
	 <label><b>Photo : </b></label>
	 <input type="file" name="txtphoto" placeholder="Choisir une image ici ..." required>
	   
	   <input type="submit" class="submit" name="btmod" value="Mettre a Jour">
	   <p><a href="acceuil.php" class="submit" >Tableau de Bord</a></p>
	   <label style="text-align : center; color:#36001;">
	   <?php
	   if(isset($_POST['btmod'])){
	          $imm=$_POST['txtImm'];
			  $marque=$_POST['txtMarque'];
			  $prixloc=$_POST['txtPl'];
			  
			  $modifier=$_GET['mod'];
			  $image=$_FILES['txtphoto']['tmp_name'];
			  $target="images/".$_FILES['txtphoto']['name'];
			  move_uploaded_file($image,$target);
			  $reqUp="UPDATE automobile SET MARQUE='$marque',PRIX_LOCATION='$prixloc', PHOTO='$target' where IMM ='$modifier'";
			  $resultat=mysqli_query($cnloccar,$reqUp);
			  if($resultat)
			  {
				     echo "Mise a jour des données Validés";
			  }
			  else {
				  echo"Echec de modification des Données ";
			  }
	   } 
			  
			  ?>
			  </label>
</form>
</div>
</body>
</html>