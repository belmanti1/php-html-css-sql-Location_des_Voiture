<?php require_once('connection.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tableau de Bord ...</title>
<link rel="stylesheet" href="loccar_style.css" type="text/css">
</head>
<body>
<p><h1><b>liste de voiture  ... </b></h1></p>



<?php 
   $reqselect="select * from automobile ";
   $resultat=mysqli_query($cnloccar,$reqselect);
   $nbr = mysqli_num_rows($resultat);
   echo "<p> Total <b> ".$nbr."</b> Voitures ...</p>";
   ?>
   </p>
  <p> <a href="Ajouter.php"><img src="<images/Ajouter.png" width ="50px" height="50px"</a></p>
  <table width="100%" border="1">
      <tr>
	        <th>immatriculation</th>
			<th>Marque</th>
		    <th>Prix de Location</th>
			<th>Photo</th>
			<th>Supprimer</th>
			<th>Modifier</th>
	  </tr>
	    <?php 
             while($ligne=mysqli_fetch_assoc($resultat))	
			 {
               

             	
               ?>	
         <tr>  
                 <td><?php echo $ligne['IMM'];?></td>
				 <td><?php echo $ligne['MARQUE'];?></td>
				 <td><?php echo $ligne['PRIX_LOCATION'];?></td>
				 <td><img src ='<?php echo $ligne['PHOTO'];?>'class="photocar"> </td>      
                 <td><a href="supprimer.php?supCar=<?php echo $ligne['IMM'];?>"><img src="images/supprimer.jpg" width="50px" height="50px"></a></td>
				 <td><a href="modifier.php?mod=<?php echo $ligne['IMM'];?>"><img src="images/modifier.png" width="50px" height="50px"></a></td>
				 
				 
        </tr>
		<?php  
			 }
			 ?>
		
		
		
		
		
		
		
	
		
		
  </body>
  </html>
  