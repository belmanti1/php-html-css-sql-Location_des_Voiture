
<?php require_once('connection.php');
?>
<!doctype html>
<html >
<head>
<meta charset="UTF-8">
<title> Location du voiture </title>
<link rel="stylesheet" href="loccar_style.css" />
</head>
<body>
<div id="container">
      <form action="" method="post" class="formulaire">
	  <h1>Connexion</h1>
	  <label><b> Nom d'utilisateur :</label><br>
      <input type="text" placeholder="Enter le nom d'utilisateur " name="txtlogin" required
	  class="zonetext"><br>
	  <label><b> Mot de Passe :</label><br>
      <input type="password" placeholder="Enter le nom de passe " name="txtpw" required
	  class="zonetext"><br>
	    
		<input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit">
		
      <?php
	    if(isset($_POST['btlogin']))
		{
		$req="select * from utlisateurs where login='".$_POST['txtlogin']."'and motPasse='".$_POST['txtpw']."'";
		if($resultat=mysqli_query($cnloccar,$req));
		{
			$ligne=mysqli_fetch_assoc($resultat);
			if($ligne!=0)
			{
				session_start();
				$_SESSION['monlogin']=$_POST['txtlogin'];
				header("location:acceuil.php");
			}
			else {
				echo "<font color='#F0001D'> login ou mot de passe est invalide </font>";
				
			}
		   }
		  }
		?>
		</form>

</body>
</html>