<html>
<head>
	<title>Liste des clients</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
</head>
<body>
    <?php include("connexion.php") 
    ?>
	<?php
		$req="SELECT * FROM client";
		$co=connect();	
		$requete=$co->query($req);
		echo'
		<h1 class="bg-info">Liste des clients</h1>
		<table class="table table-condensed">
			<tr>
				<th>Identifiant</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Adresse</th>
			<tr>';
		while($liste = $requete->fetch()){
			echo'<tr>
				<td>'.$liste["idClient"].'</td>
				<td>'.$liste["nom"].'</td>
				<td>'.$liste["prenom"].'</td>
				<td>'.$liste["adresse"].'</td>
			</tr>';
		}	
		echo"		
		</table>	
		";
	?>
</body>
</html>